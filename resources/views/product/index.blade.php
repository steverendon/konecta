@extends('layout')

@section('content')
<form action="{{ route('products.store') }}" method="POST" class="mt-3">
        <div class="row">
            <div class="col-4">
                <div class="form-group mb-2">
                    <label for="">Nombre:</label>
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Nombre"
                        name="name"
                        value="{{ old('name') }}">
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
                        value="{{ old('name') }}">
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
                        value="{{ old('name') }}">
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
                        value="{{ old('name') }}">
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
                        value="{{ old('name') }}">
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
                        value="{{ old('name') }}">
                </div>
            </div>
            <div class="col-4">
                @csrf
                <button class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
    @include('info', [
        'info' => "El producto con mas stock es: $bestStock->name"
    ])
    <table class="table mt-2">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Referencia</th>
                <th scope="col">Precio</th>
                <th scope="col">Peso</th>
                <th scope="col">Categoria</th>
                <th scope="col">Stock</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->reference }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->weight }}</td>
                <td>{{ $product->category }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Editar</a>
                </td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection