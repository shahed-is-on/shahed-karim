@extends('layouts.front-two')

@section('content')
<div class="container">
  <h3>Create Blog</h3>
  <form method="post" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
    @include('backend.blogs._form', ['submitLabel' => 'Create'])
  </form>
</div>
@endsection
