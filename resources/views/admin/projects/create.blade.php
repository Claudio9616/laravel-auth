@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('admin.projects.store')}}" method="POST">
        @csrf
        <div class="my-3">
            <label for="title" class="form-label">Aggiungi titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Titolo progetto" value="{{old('title', '')}}">
        </div>
        <div class="mb-3">
            <label for="language" class="form-label">Aggiungi linguaggio</label>
            <input type="text" class="form-control" id="language" name="language" placeholder="Linguaggio del progetto" value="{{old('language', '')}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Aggiungi descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{old('description', '')}}</textarea>
        </div>
        <button type="reset">Svuoata campi</button>
        <button type="submit">Salva</button>
    </form>  
</div>  
@endsection