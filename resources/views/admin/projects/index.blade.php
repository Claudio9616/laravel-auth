@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">CODICE PROGETTO</th>
                <th scope="col">TITOLO</th>
                <th scope="col">LINGUAGGIO</th>
                <th scope="col">
                    <div class="d-flex justify-content-end">
                        <a href="{{route('admin.projects.create')}}"><i class="fas fa-plus"></i></a>
                    </div>
                </th>
              </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                <tr>
                    <td>{{$project->id}}</td>
                    <td>{{$project->title}}</td>
                    <td>{{$project->language}}</td>
                    <td>
                        <div class="d-flex justify-content-end gap-3">
                            <a href="{{route('admin.projects.show', $project->id)}}"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{route('admin.projects.edit', $project->id)}}"><i class="fa-solid fa-pencil"></i></a>
                            <a href=""><i class="fa-solid fa-trash"></i></a>
                            {{-- ricordati che questo è un form non una a che fa richieste solo in get --}}
                        </div>
                    </td>
                </tr>
                @empty
                <h1>NON CI SONO PROGETTI</h1>                    
                @endforelse
            </tbody>
          </table>
    </div>
@endsection