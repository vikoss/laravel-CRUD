@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mis notas</div>

                <div class="row">
                    <div class="col-sm d-flex justify-content-end">
                        <a href="{{ route('notes.create') }}" class="btn btn-outline-primary mr-2 mt-2">Nueva Nota</a>
                    </div>
                </div>
                
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Ver</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($notes as $note)
                            <tr>
                                <th scope="row">{{ $note->id }}</th>
                                <td>{{ $note->title }}</td>
                                <td><a href="notes/{{ $note->id }}" class="btn btn-outline-secondary">Ver</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
