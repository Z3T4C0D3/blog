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
    {!! Form::label('anioPublicacion', 'Año de publicación del libro:') !!}
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
            @isset ($libro->image)
                <img id="picture" src="{{Storage::url($libro->image->url)}}" alt="">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2016/01/20/11/54/book-wall-1151405_960_720.jpg" alt="">
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrara como portada de libro') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
        </div>
        @error('file')
            <span class="text-danger">Archivo incorrecto, seleccione una imagen</span>
        @enderror
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus magnam ex distinctio vel expedita ducimus ipsam omnis similique, facere nisi a quaerat qui. Tenetur corporis facere dolorem esse quaerat nostrum.</p>
    </div>
</div>
<div class="form-group">
    {!! Form::label('extract', 'Extracto') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
    @error('extract')
        <small class="text-danger">Este campo es requerido para publicar el libro</small>
    @enderror
</div>