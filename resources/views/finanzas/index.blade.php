@extends('layouts.app')

@section('content')
<style>
        /* Estilos adicionales para mejorar el diseño */

    .card {
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #007bff;
        color: #fff;
        font-size: 1.25rem;
        font-weight: bold;
    }

    .table {
        border-radius: 8px;
        overflow: hidden;
    }

    .table th,
    .table td {
        text-align: center;
        vertical-align: middle;
    }

    .table td {
        padding: 12px;
    }

    .btn-danger {
        font-size: 0.9rem;
    }

</style>
<div class="container mt-5">
    <div class="row">
        <!-- Formulario -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">Registrar Gasto</div>
                <div class="card-body">
                    <form action="{{ route('gastos.store') }}" method="post">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="tipo">Tipo:</label>
                            <select name="tipo" id="tipo" class="form-control" required>
                                <option value="" selected disabled>Seleccione gasto</option>
                                <option value="gasto">Gasto</option>
                                <option value="ingreso">Ingreso</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="categoria">Categoría:</label>
                            <select name="categoria" id="categoria" class="form-control" required>
                                <option value="" selected disabled>Seleccione categoría</option>
                                <option value="Gasto Hormiga">Gasto Hormiga</option>
                                <option value="Sueldo">Sueldo</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="monto">Monto:</label>
                            <input type="number" name="monto" id="monto" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Añadir</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Tabla de Registros -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">Registros de Gastos</div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Categoría</th>
                                <th>Monto</th>
                                <th>Monto Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transacciones as $gasto)
                                <tr>
                                    <td>{{ $gasto->transaccion_nombre }}</td>
                                    <td>{{ $gasto->transaccion_tipo }}</td>
                                    <td>{{ $gasto->transaccion_categoria }}</td>
                                    <td>$ {{$gasto->transaccion_monto }}</td>
                                    <td>
                                        hola
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
