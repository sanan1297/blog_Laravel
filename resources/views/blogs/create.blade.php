@extends('blogs.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Crear nueva Anotación</h2>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Advertencia!</strong> Por favor verifica e intenta nuevamente<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('blogs.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Título:</strong>
                <input type="text" name="title" class="form-control" placeholder="Título">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripción</strong>
                <textarea class="form-control" style="height:280px" name="description" placeholder="Descripción"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-secondary" href="{{ route('blogs.index') }}"> Regresar</a>
          <button type="submit" class="btn btn-primary" >Enviar</button> <br>
        </div> <br>
    </div>
    </div>
</form>
@endsection
