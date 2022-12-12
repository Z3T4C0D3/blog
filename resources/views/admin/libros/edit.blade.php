@extends('adminlte::page')

@section('title', 'BiblioTec')

@section('content_header')
    <h1>
    </h1>
@stop

@section('content')
<div class="card-dark">
    <div class="card-header">
        <h1 class="text-center">Modificar Libro</h1>
    </div>
    <div class="card-body">
        {!! Form::model($libro, ['route'=>['admin.libros.update', $libro], 'autocomplete' => 'off', 'files' => 'true', 'method'=> 'put']) !!}
            
            @include('admin.libros.partials.form')
            
            {!! Form::submit('Modificar Libro', 
            ['class' => 'btn btn-primary']) !!}
            <a class="button btn btn-danger" href="{{route('admin.libros.index')}}">Volver</a>
            
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />@stop
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.5%;
            
        }
        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;

        }
    </style>
@section('js')
    
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready( function() {
            $('#titulo').stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slugLibros',
            space: '-'
            });
        });

        ClassicEditor
            .create( document.querySelector( '#extract' ) )
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
                console.error( error );
        } );

        //Cambiar imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) =>{
                document.getElementById("picture").setAttribute('src', event.target.result);
            } 
            reader.readAsDataURL(file);
        }

        $(document).ready(function() {
            
            $('.tags').select2({
                theme: "classic",
                placeholder: 'Seleccione una o mas etiquetas para el libro'
                

                
            });
            $('.autores').select2({
                theme: "classic",
                placeholder: 'Seleccione uno o mas autores para el libro'
            });
        });

        </script>
        
@stop