@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Editar produto') }}</div>
                <div class="card-body">
                    <form method="post" action="{{ route('products.update', $product->id) }}"
                            enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label class="col-sm-2 col-label-form">Nome do produto</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control"
                                    value="{{ $product->name }}"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-label-form">Detalhe</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" style="height:150px" name="detail"
                                        placeholder="Detalhe">{{ $product->detail }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-label-form">Imagem do Produto</label>
                            <div class="col-sm-10">
                                <input type="file" name="product_image"/>
                                <br />
                                <img src="{{ asset('images/' . $product->product_image) }}"
                                    width="150" class="img-thumbnail" />
                                <input type="hidden" name="hidden_product_image"
                                    value="{{ $product->product_image }}" />
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="hidden" name="hidden_id" value="{{ $product->id }}" />
                            <input type="submit" class="btn btn-primary" value="Atualizar" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
