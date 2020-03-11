@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{ route('notes.store') }}" method="POST">
                        @csrf
                    
                        <div class="form-group">
                            <label for="title">Titulo:</label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>

                        <div class="form-group">
                            <label for="content">Contenido:</label>
                            <input type="text" class="form-control" name="content" id="content">
                        </div>

                        <button type="submit" class="btn btn-outline-primary">Crear</button>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
