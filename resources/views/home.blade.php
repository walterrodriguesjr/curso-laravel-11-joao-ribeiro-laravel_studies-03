@extends('layouts.main_layout')

@section('content')
    {{-- <div class="text-center">
        @foreach ($pessoas_linguas as $pessoa => $linguas)
            <x-card-pessoa :$pessoa :$linguas />
        @endforeach
    </div> --}}

    {{-- componentes e slots --}}
    <div>
        <h4 class="text-info">Como funciona o slot</h4>
        <x-other-card>
            <h1 class="text-danger">Este é o slot!</h1>
        </x-other-card>
    </div>
@endsection
