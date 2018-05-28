@extends('layouts.app')

@section('title', 'Songs Create')
<script src="scripts/common/jquery-1.7.min.js" type="text/javascript"></script>
<script src="scripts/innovaeditor.js" type="text/javascript"></script>
<script src="scripts/innovamanager.js" type="text/javascript"></script>
@section('content')
    <form style="margin: 50px" class="form-group" method="post" action="{{url('song')}}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control">
        </div>

        <div class="form-group">
            <label for="artista">Artista</label>
            <input type="text" name="artista" class="form-control">
        </div>

        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" name="avatar">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>
@endsection