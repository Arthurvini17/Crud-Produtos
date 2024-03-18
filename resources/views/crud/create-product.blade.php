@extends('layouts.layout')
@section('title', 'Adicionar produtos')
@section('content')

    <div class="flex items-center  flex-col  font-semibold gap-4 justify-center drop-shadow-xl mt-3">
        <div class="">
            <h1>Adicione seu produto</h1>
        </div>

        <form class="grid grid-cols-2   gap-4 bg-slate-400 rounded-md  p-10" action="{{route('store.product')}}" method="POST">
            @csrf
            <div class="">
                <label for="name">Nome produto</label>
                <input
                    class="appearance-none w-full px-3 py-2 border rounded-md text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" placeholder="Nome produto" name="name">
                    @error('name')
                        <span>{{$message}}</span>
                    @enderror
            </div>

            <div class=" ">
                <label for="categoria">Categoria</label>
                <input
                    class="appearance-none w-full px-3 py-2 border rounded-md text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" placeholder="Categoria do produto" name="categoria">
                    @error('categoria')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div>
                <label for="validate">Validade</label>
                <input
                    class=" appearance-none w-full px-3 py-2 border rounded-md text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="date" placeholder="Validade do produto" name="validade">
                    @error('validade')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div>
                <label for="preco">Preço</label>
                <input type="number"
                    class="appearance-none w-full px-3 py-2 border rounded-md text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Preço do produto" name="preco">
                    @error('preco')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div>
                <label for="comentario">Comentario</label>
                <textarea
                    class="appearance-none w-full px-3 py-2 border rounded-md text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="comentario" id="" cols="30" rows="1">
                </textarea>
                    @error('comentario')
                    <span>{{$message}}</span>
                @enderror
            </div>
            <div class="flex items-center justify-start">
                <button class="bg-blue-600 p-2 rounded-lg drop-shadow-lg  " type="">Enviar</button>
            </div>
        </form>
    </div>
@endsection
