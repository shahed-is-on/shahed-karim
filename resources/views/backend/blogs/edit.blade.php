@extends('layouts.front-two')

@section('content')
<div class="container">
  <h3>Edit Blog</h3>
  <form method="post" action="{{ route('blogs.update', $blog) }}" enctype="multipart/form-data">
    @method('PUT')
    @include('backend.blogs._form', ['submitLabel' => 'Update'])
  </form>
</div>
@endsection
