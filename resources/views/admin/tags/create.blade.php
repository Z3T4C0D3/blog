@extends('adminlte::page')

@section('title', 'BiblioTec')


@section('content')
    
    <div class="card-dark">
        <div class="card-header">
            <h1 class="text-center">Agregar nueva etiqueta</h1>
        </div>
        <div class="card-body bg-dark">
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