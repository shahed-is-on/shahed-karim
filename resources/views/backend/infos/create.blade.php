@extends('layouts.backend')

@section('content')
<div class="container" style="margin-top: 25px; margin-bottom: 25px">
  <h3>Create Info</h3>
  <form method="post" action="{{ route('infos.store') }}" enctype="multipart/form-data">
    @include('backend.infos._form', ['submitLabel' => 'Create'])
  </form>
</div>
@endsection
