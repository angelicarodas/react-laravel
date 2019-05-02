@extends('layouts.app')
@section('content')
<div class="container" >
  <div class="card">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <hr>
            <div><a href="{{route('register')}}" class='btn btn-primary'>Registrar</a></div>
            <hr>
            <div id='usuario'>
                
            </div>
        </div>
    </div>
    </div>
</div>
@endsection