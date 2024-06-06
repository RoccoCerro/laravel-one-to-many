@extends('layouts.app')

@section('content')

  <section class="show-project p-5">
    <div class="container">
      <h1>{{ $project->title }}</h1>
      <p><strong>Slug: </strong> {{ $project->slug }}</p>
      <p>
        <strong>Tipo: </strong>
        {{ $project->type ? $project->type->name : 'Nessun tipo'}}
      </p>
      <div>
        <strong>Contenuto: </strong>
        <p>{!! $project->content !!}</p>
      </div>
      <div class="project-img">
        <img src="{{ $project->img_url }}" alt="">
      </div>
    </div>
  </section>
@endsection