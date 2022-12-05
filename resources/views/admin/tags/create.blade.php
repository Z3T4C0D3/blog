@extends('adminlte::page')

@section('title', 'BiblioTec')

@section('content_header')
    <h1>Crear Etiquetas</h1>
@stop

@section('content')
    
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.tags.store']) !!}
                @include('admin.tags.partials.form')

                {!! Form::submit('Crear Etiqueta', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
<script>
    $(document).ready( function() {
        $('#describeTag').stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slugTag',
        space: '-'
    });
});
</script>
@stop