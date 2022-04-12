@extends('layout')

@section('content')
    <h1 class="m-4 text-center">Editar Producto</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST" class="mt-3">
        <div class="row">
            <div class="col-4">
                <div class="form-group mb-2">
                    <label for="">Nombre:</label>
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Nombre"
                        name="name"
                        value="{{ old('name', $product->name) }}">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group mb-2">
                    <label for="">Referencía:</label>
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Referencia"
                        name="reference"
                        value="{{ old('name', $product->reference) }}">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group mb-2">
                    <label for="">Precio:</label>
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Precio"
                        name="price"
                        value="{{ old('name', $product->price) }}">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group mb-2">
                    <label for="">Peso:</label>
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Peso"
                        name="weight"
                        value="{{ old('name', $product->weight) }}">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group mb-2">
                    <label for="">Categoría:</label>
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Categoria"
                        name="category"
                        value="{{ old('name', $product->category) }}">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group mb-2">
                    <label for="">Stock:</label>
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Stock"
                        name="stock"
                        value="{{ old('name', $product->stock) }}">
                </div>
            </div>
            <div class="col-4">
                @csrf
                @method('PUT')
                <button class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
@endsection