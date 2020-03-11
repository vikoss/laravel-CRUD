@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                
                <form action="{{ route('notes.destroy', $note->id) }}" method="POST" id="destroy-form" class="d-none">
                    @csrf
                    @method('DELETE')
                </form>

                <div class="row mt-2">
                        <div class="col-sm d-flex justify-content-start ml-2">
                            <a href="{{ route('notes.index') }}" class="btn btn-outline-secondary mr-2">Regresar</a>
                        </div>
                    <div class="col-sm d-flex justify-content-end">
                        <button onclick="document.getElementById('destroy-form').submit();" class="btn btn-outline-danger mr-2">Eliminar</button>
                        <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-outline-primary mr-2">Editar</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            
                            <label>Id:</label>
                            <p>{{ $note->id ?? '' }}</p>

                            <label>Titulo:</label>
                            <p>{{ $note->title ?? '' }}</p>

                            <label>Fecha de registro:</label>
                            <p>{{ $note->created_at ?? 'No registrada.' }}</p>

                        </div>
                        <div class="col-sm">
                            <label>Contenido:</label>
                            <p>{{ $note->content ?? '' }}</p>

                            <label>Quien lo registro:</label>
                            <p>{{ App\User::find($note->user_id)->name ?? '' }}</p>

                            <label>Ultima actualizacion:</label>
                            <p>{{ $note->updated_at ?? 'Ninguna actualizacion aun.' }}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
