<div class="contaner-auth h-100 d-flex flex-column justify-content-center align-items-center">
    <div class="w-100 d-flex justify-content-center align-items-center mb-4">
        <img src="{{ asset('images/logo.png') }}" alt="logo" width="40">
        <h2 class="ms-2 mb-0 fs-2 text-color-1 fw-normal">Schedify.</h2>
    </div>
    <div class="nav-form mb-3 border border-color rounded-3 d-flex">
        <button href="login" @click="toggleForm" class="toggleForm text-color-2 btn nav-btn active">Login</button>
        <button href="register" @click="toggleForm" class="toggleForm text-color-2 btn nav-btn">Cadastrar</button>
    </div>
    <div class="wrapper-auth d-flex align-items-center" tabindex="0">
        <x-login.login />
        <x-login.register />
    </div>
    <div class="auth-social">
        aqui vem as redes sociais para login
    </div>
</div>