@extends('layouts.backend')

@section('content')
<div class="container" style="margin-top: 25px">
  <h3>Edit Blog</h3>
  <form method="post" action="{{ route('blogs.update', $blog) }}" enctype="multipart/form-data">
    @method('PUT')
    @include('backend.blogs._form', ['submitLabel' => 'Update'])
  </form>
</div>
@endsection
