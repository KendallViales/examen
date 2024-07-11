@extends('layouts.app')

@section('content')
    <h1>Lista de Apuestas</h1>

    <table>
        <thead>
            <tr>
                <th>ID Apuesta</th>
                <th>ID Juego</th>
                <th>Nombre Juego</th>
                <th>Fecha</th>
                <th>Monto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($apuestas as $apuesta)
                <tr>
                    <td>{{ $apuesta->id }}</td>
                    <td>{{ $apuesta->id_juego }}</td>
                    <td>{{ $apuesta->juego->nombre }}</td>
                    <td>{{ $apuesta->fecha }}</td>
                    <td>{{ $apuesta->monto }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
