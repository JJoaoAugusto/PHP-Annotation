@extends('layouts.app')

@section('content')
    <section class="form_pg">
        <div class="form_left">
            <h1 class="title">Login</h1>
            <p class="subtitle">Acesse nossa plataforma para gerenciar sua rotina semanal.</p>
        </div>
        <div class="form_right">
            <form method="POST" action="{{ route('insert-login') }}">
                @csrf
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Senha">

                <span><a href="{{ route('forgot-password') }}">Esqueceu sua senha?</a></span>

                <x-button class="btn_fullwidth" linkto="insert-login">
                    Logar
                </x-button>
            </form>
        </div>
    </section>
@endsection
