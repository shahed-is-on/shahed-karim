@extends('layouts.front-two')

@section('content')
<div class="container">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Blogs</h3>
    <a class="btn btn-primary" href="{{ route('blogs.create') }}">+ New Blog</a>
  </div>

  <form class="mb-3" method="get">
    <div class="input-group">
      <input type="text" name="q" value="{{ $q }}" class="form-control" placeholder="Search…">
      <button class="btn btn-outline-secondary">Search</button>
    </div>
  </form>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <table class="table table-striped align-middle">
    <thead>
      <tr>
        <th>Category</th>
        <th>Title</th>
        <th>Writer</th>
        <th>Slug</th>
        <th>Updated</th>
        <th class="text-end">Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse($blogs as $blog)
        <tr>
        <td>{{ $blog->category->name ?? '—' }}</td>
          <td><a href="{{ route('blogs.show',$blog) }}">{{ $blog->title }}</a></td>
          <td>{{ $blog->writer_name }}</td>
          <td>{{ $blog->slug }}</td>
          <td>{{ $blog->updated_at->format('Y-m-d H:i') }}</td>
          <td class="text-end">
            <a class="btn btn-sm btn-outline-secondary" href="{{ route('blogs.edit',$blog) }}">Edit</a>
            <form class="d-inline" method="post" action="{{ route('blogs.destroy',$blog) }}" onsubmit="return confirm('Delete this blog?')">
              @csrf @method('DELETE')
              <button class="btn btn-sm btn-outline-danger">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr><td colspan="5" class="text-muted">No blogs found.</td></tr>
      @endforelse
    </tbody>
  </table>

  {{ $blogs->links() }}
</div>
@endsection
