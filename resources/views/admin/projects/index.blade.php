@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-end">
    <div class="col-auto p-3">
      <a class="btn btn-dark" href="{{ route('admin.projects.create')}}">New Project</a>
    </div>
  </div>

  <div class="row">
    @foreach ($projects as $project)
    <div class="col-12 p-2">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $project->title }}</h5>
          <p class="card-text">{{ $project->content }}</p>
          <div class="my-card-btn row">
            <div class="col-auto">
              <a class="btn btn-text-decoration-none text-white btn-secondary" href="{{ route('admin.projects.edit', $project) }}">modifica</a>
            </div>
            <div class="col-auto">
              <form action="{{ route('admin.projects.destroy',$project) }}" method="POST">
    
                @csrf
                @method('DELETE')
    
                <button class="btn btn-danger link-danger text-white">Elimina</button>
    
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>


  <!-- <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Slug</th>
        <th>Content</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($projects as $project)
      <tr>
        <td>
          <a class="text-white text-decoration-none" href="{{ route('admin.projects.show', $project) }}">
            {{ $project->title }}
          </a>
        </td>
        <td>{{$project->slug}}</td>
        <td>{{$project->content}}</td>
        <td><a class="btn btn-text-decoration-none text-white btn-secondary" href="{{ route('admin.projects.edit', $project) }}">modifica</a></td>
        <td>
          <form action="{{ route('admin.projects.destroy',$project) }}" method="POST">

            @csrf
            @method('DELETE')

            <button class="btn btn-danger link-danger text-white">Elimina</button>

          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div> -->

@endsection