@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if($message = Session::get('success'))

            <div class="alert alert-success">
                {{ $message }}
            </div>

            @endif

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-md-6"><b>Dados de Produtos</b></div>
                        <div class="col col-md-6">
                            <a href="{{ route('products.create') }}" class="btn btn-success btn-sm float-end">
                                Adicionar</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Imagem</th>
                            <th>Nome</th>
                            <th>Ação</th>
                        </tr>
                        @if(count($data) > 0)
                            @foreach($data as $row)
                                <tr>
                                    <td><img src="{{ asset('images/' . $row->product_image) }}" width="75" />
                                    </td>
                                    <td>{{ $row->name }}</td>
                                    <td>
                                        <form method="post" action="{{ route('products.destroy', $row->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('products.show', $row->id) }}"
                                                class="btn btn-primary btn-sm">Ver</a>
                                            <a href="{{ route('products.edit', $row->id) }}"
                                                class="btn btn-warning btn-sm">Editar</a>
                                            <input type="submit" class="btn btn-danger btn-sm"
                                                value="Eliminar" />
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center">No Data Found</td>
                            </tr>
                        @endif
                    </table>
                    {!! $data->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
