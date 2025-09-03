@extends('layouts.app')

@section('content')
    <section class="home_pg">
        <h1 class="title">Que tal organizar sua rotina semanal <br>com nosso serviço de <span> anotações?</span></h1>
        <p class="subtitle">Com nossa ferramenta, você vai poder criar, organizar e gerenciar <br>todas as tarefas do dua de forma totalmente gratuita</p>
        @include('components.button', ['text' => 'COMEÇAR HOJE MESMO', 'class' => 'btn_login'])
    </section>
@endsection
