<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInfoRequest;
use App\Http\Requests\UpdateInfoRequest;
use App\Models\Info;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InfoController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');

        $infos = Info::with('blog')
            ->when($q, fn($qq) => $qq->where(function($sub) use ($q) {
                $sub->where('name','like',"%$q%")
                    ->orWhere('email','like',"%$q%")
                    ->orWhere('phone','like',"%$q%");
            }))
            ->latest()
            ->paginate(12)
            ->withQueryString();

        return view('backend.infos.index', compact('infos', 'q'));
    }

    public function create()
    {
        $blogs = Blog::orderBy('title')->pluck('title','id');
        return view('backend.infos.create', compact('blogs'));
    }

    public function store(StoreInfoRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('profile_photo')) {
            $data['profile_photo'] = $request->file('profile_photo')->store('infos', 'public');
        }

        $info = Info::create($data);

        return redirect()->route('infos.show', $info)->with('success', 'Info created.');
    }

    public function show(Info $info)
    {
        $info->load('blog');
        return view('backend.infos.show', compact('info'));
    }

    public function edit(Info $info)
    {
        $blogs = Blog::orderBy('title')->pluck('title','id');
        return view('backend.infos.edit', compact('info','blogs'));
    }

    public function update(UpdateInfoRequest $request, Info $info)
    {
        $data = $request->validated();

        if ($request->hasFile('profile_photo')) {
            if ($info->profile_photo && Storage::disk('public')->exists($info->profile_photo)) {
                Storage::disk('public')->delete($info->profile_photo);
            }
            $data['profile_photo'] = $request->file('profile_photo')->store('infos', 'public');
        }

        $info->update($data);

        return redirect()->route('infos.show', $info)->with('success', 'Info updated.');
    }

    public function destroy(Info $info)
    {
        if ($info->profile_photo && Storage::disk('public')->exists($info->profile_photo)) {
            Storage::disk('public')->delete($info->profile_photo);
        }
        $info->delete();

        return redirect()->route('infos.index')->with('success', 'Info deleted.');
    }
}
