@extends('layouts.backend')

@section('content')
<div class="container" style="margin-top: 25px">
  <h3>Edit Info</h3>
  <form method="post" action="{{ route('infos.update', $info) }}" enctype="multipart/form-data">
    @method('PUT')
    @include('backend.infos._form', ['submitLabel' => 'Update'])
  </form>
</div>
@endsection
