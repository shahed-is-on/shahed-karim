@extends('layouts.backend')

@section('content')
<div class="container" style="margin-top: 25px">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Infos</h3>
    <a class="btn btn-primary" href="{{ route('infos.create') }}">+ New Info</a>
  </div>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <form class="mb-3" method="get">
    <div class="input-group">
      <input type="text" name="q" value="{{ $q }}" class="form-control" placeholder="Search by name, email, phone…">
      <button class="btn btn-outline-secondary">Search</button>
    </div>
  </form>

  <table class="table table-striped align-middle">
    <thead>
      <tr>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Blog</th>
        <th>Updated</th>
        <th class="text-end">Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse($infos as $info)
        <tr>
          <td style="width:64px">
            @if($info->profile_photo)
              <img src="{{ asset('storage/'.$info->profile_photo) }}" alt="{{ $info->name }}" class="rounded" style="width:48px;height:48px;object-fit:cover">
            @else
              <span class="text-muted">—</span>
            @endif
          </td>
          <td><a href="{{ route('infos.show',$info) }}">{{ $info->name }}</a></td>
          <td>{{ $info->email ?? '—' }}</td>
          <td>{{ $info->phone ?? '—' }}</td>
          <td>{{ $info->blog?->title ?? '—' }}</td>
          <td>{{ $info->updated_at->format('Y-m-d H:i') }}</td>
          <td class="text-end">
            <a class="btn btn-sm btn-outline-secondary" href="{{ route('infos.edit',$info) }}">Edit</a>
            <form class="d-inline" method="post" action="{{ route('infos.destroy',$info) }}" onsubmit="return confirm('Delete this info?')">
              @csrf @method('DELETE')
              <button class="btn btn-sm btn-outline-danger">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr><td colspan="7" class="text-muted">No records found.</td></tr>
      @endforelse
    </tbody>
  </table>

  {{ $infos->links() }}
</div>
@endsection
