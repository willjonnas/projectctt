@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-md-6"><b>Detalhe de produto</b></div>
                        <div class="col col-md-6">
                            <a href="{{ route('products.index') }}"
                                class="btn btn-primary btn-sm float-end">Ver todos</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-label-form"><b>Nome</b></label>
                        <div class="col-sm-10">
                            {{ $product->name }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-label-form"><b>Detalhe</b></label>
                        <div class="col-sm-10">
                            {{ $product->detail }}
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form"><b>Imagem</b></label>
                        <div class="col-sm-10">
                            <img src="{{ asset('images/' .  $product->product_image) }}"
                                width="200" class="img-thumbnail" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
