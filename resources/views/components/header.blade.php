<header>
    <div class="header_left">
        <a href={{ route('home') }}>
            <img src="{{ asset('imgs/logo.png') }}" alt="Logo" title="Logo">
        </a>
    </div>
    <div class="header_right">
        <x-button class='' linkto='create-account'>Criar Conta</x-button>
        <x-button class='btn_login' linkto='login'>Login</x-button>
    </div>
</header>
