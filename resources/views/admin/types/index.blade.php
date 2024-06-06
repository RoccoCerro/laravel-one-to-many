@extends('layouts.app')

@section('content')
  <div class="container p-5">
    <div class="row justify-content-between">
      <div class="col-auto">
        <h1>Tipo</h1>
      </div>
      <div class="col-auto">
        <a class="btn btn-dark" href="{{ route('admin.types.create') }}">Nuovo tipo</a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      @foreach ($types as $type)
        <div class="col">
          <div class="card">
            <div class="card-header">
              <p><a href="{{ route('admin.types.show', $type) }}">{{ $type->name }}</a></p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection