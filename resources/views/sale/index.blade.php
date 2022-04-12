@extends('layout')

@section('content')
<h1 class="m-2 text-center">Realizar Venta</h1>
<form action="{{ route('sales.store') }}" method="POST" class="mt-3">
        <div class="row">
            <div class="col-4">
                <div class="form-group mb-2">
                    <label for="">Nombre:</label>
                    <select id="" class="form-control" name="product_id">
                        <option value="">Seleccionar</option>
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group mb-2">
                    <label for="">Cantidad:</label>
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Cantidad"
                        name="amount"
                        value="{{ old('amount') }}">
                </div>
            </div>
            <div class="col-8">
                @csrf
                <button class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
    @include('info', [
        'info' => "El producto mas vendido es: $bestSeller"
    ])
@endsection