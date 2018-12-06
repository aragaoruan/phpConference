
@extends('layout.app')

@section('content')
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Telefone</td>
                <td>CPF</td>
            </tr>
        </thead>
        @foreach( $clientes as $cliente)
            <tbody>
                <td>{!! $cliente->id !!}</td>
                <td>{!! $cliente->name !!}</td>
                <td>{!! $cliente->telefone !!}</td>
                <td>{!! $cliente->cpf !!}</td>
            </tbody>

        @endforeach

    </table>

@stop