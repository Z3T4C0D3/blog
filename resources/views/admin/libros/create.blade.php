@extends('adminlte::page')

@section('title', 'BiblioTec')

@section('content_header')
    <h1>
        
    </h1>
@stop

@section('content')
<div class="card-dark">
    <div class="card-header">
        <h1 class="text-center">Agregar nuevo libro</h1>
    </div>
    <div class="card-body">
        {!! Form::open(['route'=>'admin.libros.store', 'autocomplete' => 'off']) !!}
            {!! Form::hidden('user_id', auth()->user()->id) !!}
            <div class="form-group @error('titulo')is-invalid @enderror">
                {!! Form::label('titulo', 'Titulo del libro:') !!}
                {!! Form::text('titulo', null, 
                ['class' => 'form-control', 
                'placeholder' => 'Ingrese el titulo del libro']) !!}
                <hr>
                @error('titulo')
                    <small class="text-danger">El campo es requerido</small>
                 @enderror
            </div>
            <div class="form-group">
                {!! Form::label('slugLibros', 'Slug del libro:') !!}
                {!! Form::text('slugLibros', null, 
                ['class' => 'form-control', 
                'placeholder' => 'Ingrese slug del libro',
                'readonly']) !!}
                <hr>
                @error('slugLibros')
                    <small class="text-danger">El campo es requerido</small>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('codigo', 'Codigo del libro:') !!}
                {!! Form::text('codigo', null, 
                ['class' => 'form-control', 
                'placeholder' => 'Ingrese el codigo del libro']) !!}
                <hr>
                @error('codigo')
                    
                    <small class="text-danger">Este campo es requerido para publicar el libro</small>
                 @enderror
            </div>
            <div class="form-group">
                {!! Form::label('anioPublicacion', 'Año de publicaciond del libro:') !!}
                {!! Form::text('anioPublicacion', null, 
                ['class' => 'form-control', 
                'placeholder' => 'Ingrese año de publicacion del libro']) !!}
                <hr>
                @error('anioPublicacion')
                    
                    <small class="text-danger">Este campo es requerido para publicar el libro</small>
                 @enderror
            </div>
            <div class="form-group">
                {!! Form::label('clasificaciones_id', 'Categoria del libro:') !!}
                {!! Form::select('clasificaciones_id', $clasificaciones, null, 
                ['class' => 'form-control', 'placeholder' => 'Seleccione clasificacion']) !!}
                @error('clasificaciones_id')
                    <small class="text-danger">Este campo es requerido para publicar el libr</small>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('id_editorial', 'Editorial de libro:') !!}
                {!! Form::select('id_editorial', $editoriales, null, 
                ['class' => 'form-control', 'placeholder' => 'Seleccione editorial']) !!}
                <hr>
                @error('codigo')
                    
                    <small class="text-danger">Este campo es requerido para publicar el libro</small>
                 @enderror
            </div>
            <div class="form-group">
                {!! Form::label('tags', 'Etiquetas del libro:') !!}
                <select class="tags py-6" style="width: 100%" name="tags[]" multiple="multiple" >
                    
                    @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->describeTag}}</option>
                    @endforeach 
                  </select>
                  
                    @error('tags')
                        <small class="text-danger">Este campo es requerido para publicar el libr</small>
                    @enderror
            </div>
            <div class="form-group">
                {!! Form::label('autores', 'Autores del libro:') !!}
                <select class="autores" style="width: 100% height: 100%" name="autores[]" multiple="multiple">
                    @foreach($autores as $autor)
                    <option value="{{$autor->id}}">{{$autor->nombre}}</option>
                    @endforeach 
                   
                    @error('autores')
                        <small class="text-danger">Este campo es requerido para publicar el libr</small>
                    @enderror
                  </select>
            </div>

            <div class="form-group">
                {!! Form::label('status', 'Estado:') !!}

                <label>
                    {!! Form::radio('status', 1, true) !!}
                    Borrador
                </label>

                <label>
                    {!! Form::radio('status', 2) !!}
                    Publicado
                </label>
                <hr>
                @error('status')
                    <small class="text-danger">Este campo es requerido para publicar el libr</small>
                @enderror
            </div>
            
            <div class="row mb-3">
                <div class="col">
                    <div class="image-wrapper">
                        <img src="https://cdn.pixabay.com/photo/2016/01/20/11/54/book-wall-1151405_960_720.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('file', 'Imagen que se mostrara como partada de libro') !!}
                        {!! Form::file('file', ['class' => 'form-control-file']) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('extract', 'Extracto') !!}
                {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
                @error('extract')
                    <small class="text-danger">Este campo es requerido para publicar el libro</small>
                @enderror
            </div>
            
            {!! Form::submit('Agregar Libro', 
            ['class' => 'btn btn-primary']) !!}
            
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