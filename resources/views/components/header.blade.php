<header>
    <div class="header_left">
        <img src="{{ asset('imgs/logo.png') }}" alt="Logo" title="Logo">
    </div>
    <div class="header_right">
        @include('components.button', ['text' => 'Criar Conta', 'class' => ''])
        @include('components.button', ['text' => 'Login', 'class' => 'btn_login'])
    </div>
</header>
