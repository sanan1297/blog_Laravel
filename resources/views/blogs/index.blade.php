@extends('blogs.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Vizualización de blogs</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('blogs.create') }}"> Crear blog</a> <br><br>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Título</th>
            <th>Descripción</th>
            <th width="250px">Acción</th>
        </tr>
        @foreach ($blogs as $blog)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->description }}</td>
            <td>
                <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('blogs.show',$blog->id) }}">Ver</a>

                    <a class="btn btn-primary" href="{{ route('blogs.edit',$blog->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $blogs->links() !!}

@endsection
