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
            <div class="form-group">
                {!! Form::label('titulo', 'Titulo del libro:') !!}
                {!! Form::text('titulo', null, 
                ['class' => 'form-control', 
                'placeholder' => 'Ingrese el titulo del libro']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('slugLibros', 'Slug del libro:') !!}
                {!! Form::text('slugLibros', null, 
                ['class' => 'form-control', 
                'placeholder' => 'Ingrese slug del libro',
                'readonly']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('clasificaciones_id', 'Categoria:') !!}
                {!! Form::select('clasificaciones_id', $clasificaciones, null, 
                ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('tags_id', 'Etiquetas:') !!}
                <select class="js-example-basic-multiple" style="width: 100%" name="states[]" multiple="multiple">
                    @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->describeTag}}</option>
                    
                    @endforeach 
                  </select>
            </div>
            <div class="form-group">
                {!! Form::label('autores_id', 'Autores:') !!}
                <select class="js-example-basic-multiple" style="width: 100%" name="states[]" multiple="multiple">
                    @foreach($autores as $autor)
                    <option value="{{$autor->id}}">{{$autor->nombre}}</option>
                    
                    @endforeach 
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
            </div>
            

            <div class="form-group">
                {!! Form::label('extract', 'Extracto') !!}
                {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('body', 'Informacion del libro') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control', 'rows' => '2']) !!}
            </div>
            {!! Form::submit('Agregar Libro', 
            ['class' => 'btn btn-primary']) !!}
            
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@stop

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
            
        $('.js-example-basic-multiple').select2({
            theme: "classic"
        });
        });

        </script>
        
@stop