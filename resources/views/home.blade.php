@extends('layouts.main_layout')

@section('content')
    {{-- <div class="text-center">
        @foreach ($pessoas_linguas as $pessoa => $linguas)
            <x-card-pessoa :$pessoa :$linguas />
        @endforeach
    </div> --}}

    {{-- componentes e slots --}}
    {{-- <div>
        <h4 class="text-info">Como funciona o slot</h4>
        <x-other-card>
            <h1 class="text-danger">Este é o slot!</h1>
        </x-other-card>
    </div> --}}

  {{--   <x-multi-slot>
        <x-slot:title>Este é o título</x-slot:title>
        <x-slot:content>Este é o conteúdo</x-slot:title>
        <x-slot:footer>
            <ul>
                <li>Item 1</li>
                <li>Item 2</li>
                <li>Item 3</li>
            </ul>
        </x-slot:title>
    </x-multi-slot> --}}

<h4>Componente Anônimo</h4>
<x-alert-card>Primeira Mensagem</x-alert-card>
<x-alert-card>Segunda Mensagem</x-alert-card>
<x-alert-card>Terceira Mensagem</x-alert-card>

@endsection
