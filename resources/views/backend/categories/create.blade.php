@extends('layouts.front-two')

@section('content')
<div class="container">
    <h3>Create Category</h3>
    <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name *</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Slug (optional, auto if blank)</label>
            <input type="text" name="slug" value="{{ old('slug') }}" class="form-control">
            @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button class="btn btn-primary">Save</button>
        <a href="{{ route('categories.index') }}" class="btn btn-light">Cancel</a>
    </form>
</div>
@endsection
