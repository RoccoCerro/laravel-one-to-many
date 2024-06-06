@extends('layouts.app')

@section('content')
  <div class="container p-5">
    <div class="row">
      <h1>Tipo</h1>
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