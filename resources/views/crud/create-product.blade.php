@extends('layouts.layout')
@section('title', 'Adicionar produtos')
@section('content')

    <div class="flex items-center  flex-col gap-4 justify-center  mt-3">
        <div>
            <h1>Adicione seu produto</h1>
        </div>
        <form class="grid grid-cols-2 gap-4 bg-slate-400 rounded-md h-full p-10" action="#" method="POST">
            @csrf
            <div class="">
                <label for="name">Nome produto</label>
                <input class="w-full" type="text" placeholder="Nome produto" name="name">
            </div>

            <div class=" ">
                <label for="categoria">Categoria</label>
                <input class="w-full" type="text" placeholder="Categoria do produto" name="categoria">
            </div>

            <div>
                <label for="validate">Validade</label>
                <input class="w-full" type="date" placeholder="Validade do produto" name="validade">
            </div>

            <button type="">Enviar</button>
        </form>
    </div>
@endsection
