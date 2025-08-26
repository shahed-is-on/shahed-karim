@extends('layouts.front-two')

@section('content')
<div class="container">
  <h3>Edit Info</h3>
  <form method="post" action="{{ route('infos.update', $info) }}" enctype="multipart/form-data">
    @method('PUT')
    @include('backend.infos._form', ['submitLabel' => 'Update'])
  </form>
</div>
@endsection
