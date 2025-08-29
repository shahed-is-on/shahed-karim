@extends('layouts.backend')

@section('content')
<div class="container" style="margin-top: 25px; margin-bottom: 25px">
  <h3>Create Blog</h3>
  <form method="post" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
    @include('backend.blogs._form', ['submitLabel' => 'Create'])
  </form>
</div>
@endsection
