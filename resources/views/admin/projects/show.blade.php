@extends('layouts.app')

@section('content')

  <section>
    <div class="container">
      <h1>{{ $project->title }}</h1>
      <p>{{ $project->slug }}</p>
      <p>
        {{ $project->type ? $project->type->name : 'Nessuna Categoria'}}
      </p>
    </div>
    <div class="container">
      {!! $project->content !!}
    </div>
  </section>
@endsection