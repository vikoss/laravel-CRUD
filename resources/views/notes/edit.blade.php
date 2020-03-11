@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{ route('notes.update', $note->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                    
                        <div class="form-group">
                            <label for="title">Titulo:</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ $note->title }}">
                        </div>

                        <div class="form-group">
                            <label for="content">Contenido:</label>
                            <input type="text" class="form-control" name="content" id="content" value="{{ $note->content }}">
                        </div>

                        <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                        <a href="{{ route('notes.show', $note->id) }}" class="btn btn-outline-danger">Cancelar</a>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
