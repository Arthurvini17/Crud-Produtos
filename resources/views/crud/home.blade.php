@extends('layouts.layout')
@section('title', 'Essa é a home')
@section('content')

    <div class="flex items-center justify-center bg-green-500 text-black">
        @if (session('atualizado'))
            {{ session('atualizado') }}
        @endif
    </div>

    <div class="p-9">

        <div>
            <form class="form-inline my-2 my-lg-0" method="get" action="{{ route('home.index') }}">
                <input x-model="searh" class=" bg-slate-400 placeholder:text-slate-950 rounded-md p-1 text-black" type="search" name="search" placeholder="Pesquisar">
                <button class="my-2 my-sm-0 bg-sky-400 rounded-md p-1 font-semibold" type="submit">Procurar</button>
            </form>

        </div>
        <table class=" w-full  bg-gray-400 mt-9 drop-shadow-2xl  border-collapse rounded-lg">
            <thead>
                <tr class="border-collapse">
                    <th class="border px-4 py-2">Categoria</th>
                    <th class="border px-4 py-2">Nome</th>
                    <th class="border px-4 py-2">Validade</th>
                    <th class="border px-4 py-2">Preço</th>
                    <th class="border px-4 py-2">Comentário</th>
                    <th class=" col-span-5 px-4 py-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($produtos as $produto)
                    <tr>
                        <td class="border px-4 py-2 text-center">{{ $produto->categoria }}</td>
                        <td class="border px-4 py-2 text-center">{{ $produto->name }}</td>
                        <td class="border px-4 py-2 text-center">{{\Carbon\Carbon::parse($produto->validade)->tz('America/Sao_Paulo')->format('d/m/Y')}}</td>
                        <td class="border px-4 py-2 text-center"> R$ {{ $produto->preco }}</td>
                        <td class="border px-4 py-2 text-center">{{ $produto->comentario }}</td>
                        <td class="border px-4 py-2 flex items-center justify-center gap-2">

                            <form method="POST" action="{{ route('delete.product', ['id' => $produto->id]) }}">
                                <button class="bg-red-500 p-1 rounded-lg drop-shadow-md">Excluir</button></a>
                                @csrf
                            </form>
                        {{-- </td> --}}

                        {{-- <td class="border px-4 py-2 text-center"> --}}
                            <a href="{{ route('edit.product', ['id' => $produto->id]) }}">
                                <button class="bg-green-300 p-1 rounded-lg drop-shadow-md">Editar</button>
                            </a>
                        {{-- </td> --}}
                    
                    {{-- <td class="border px-4 py-2 text-center" > --}}
                        <a href="{{ route('gerar.pdf', ['id' => $produto->id]) }}">
                            <button class="bg-orange-400 p-1 rounded-lg drop-shadow-md">Gerar pdf</button>
                        </a>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td class="cols-span-5">Nenhum item no sistema</td>
                    </tr>
                @endforelse
            </tbody>

        </table>
        <a href="{{ route('create.product') }}">
            <button class="bg-sky-400 rounded-md p-2 mt-2 drop-shadow-lg font-medium">Adicionar produto</button>
        </a>
    </div>
@endsection
