@extends('layouts.front-two')

@section('content')
<div class="container">
  <h3>Create Info</h3>
  <form method="post" action="{{ route('infos.store') }}" enctype="multipart/form-data">
    @include('backend.infos._form', ['submitLabel' => 'Create'])
  </form>
</div>
@endsection
