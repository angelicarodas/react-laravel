@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <b>Crear Privilegio</b>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('privilegios/store') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="nombre">Nombre: </label>
                                <input type="text" name="name" class="form-control" id="nombre">
                            </div>
                            <div class="form-group">
                                <label for="email">URL Amigable</label>
                                <input type="text" name="slug" class="form-control" id="email" >
                            </div>
                            <div class="form-group">
                                <label for="des">Descripcion</label>
                                <textarea name="description" class="form-control" id="des"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>                
                    </div>
                </div>                
            </div>
        </div>
    </div>
@endsection