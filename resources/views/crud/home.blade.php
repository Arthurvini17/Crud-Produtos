@extends('layouts.layout')
@section('title', 'Essa é a home')
@section('content')
    <table class="table-fixed w-full h-full bg-gray-400 mt-9 drop-shadow-lg border-collapse rounded-lg">
        <thead>
            <tr class="border-collapse">
                <th class=" border px-4 py-2">Categoria</th>
                <th class=" border  px-4 py-2">Nome</th>
                <th class="  border  px-4 py-2">Validade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border px-4 py-2 text-center">Fruta</td>
                <td class="border px-4 py-2 text-center">Maça</td>
                <td class="border px-4 py-2 text-center">11/03/2005</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('create.product') }}">
        <h3>Adicionar produto</h3>
    </a>
@endsection
