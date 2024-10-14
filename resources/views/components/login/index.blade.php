<div class="contaner-auth h-100 d-flex flex-column justify-content-center align-items-center py-4">
    <div class="w-100 d-flex justify-content-center align-items-center mb-3">
        <img src="{{ asset('images/logo.png') }}" alt="logo" width="40">
        <h2 class="ms-2 mb-0 fs-2 text-color-1 fw-normal">Schedify.</h2>
    </div>
    <div class="nav-form mb-3 border border-color rounded-3 d-flex">
        <button href="login" @click="toggleForm" class="toggleForm text-color-2 btn nav-btn active">Entrar</button>
        <button href="register" @click="toggleForm" class="toggleForm text-color-2 btn nav-btn">Cadastrar</button>
    </div>
    <div class="wrapper-auth d-flex align-items-center flex-fill">
        <x-login.login />
        <x-login.register />
    </div>
    <div class="auth-social w-100 px-2">
        <div class="d-flex justify-content-center align-items-center w-100">
            <div class="flex-fill border-bottom border-color me-3"></div>
            <h4 class="fs-5 mb-1 text-secondary fw-light">ou</h4>
            <div class="flex-fill border-bottom border-color ms-3"></div>
        </div>
        <div class="w-100 d-flex justify-content-center align-items-center flex-wrap mt-2">
            <a href="" class="p-2 m-1 rounded-3 bg-sec" data-bs-toggle="tooltip" data-bs-title="Autenticar com o Google" data-bs-placement="bottom">
                <img src="{{ asset('/images/Google.png') }}" alt="Google" width="30" height="30">
            </a>
            <a href="" class="p-2 m-1 rounded-3 bg-sec" data-bs-toggle="tooltip" data-bs-title="Autenticar com o Apple" data-bs-placement="bottom">
                <img src="{{ asset('/images/Apple.png') }}" alt="Apple" width="30" height="30">
            </a>
            <a href="" class="p-2 m-1 rounded-3 bg-sec" data-bs-toggle="tooltip" data-bs-title="Autenticar com o Facebook" data-bs-placement="bottom">
                <img src="{{ asset('/images/Facebook.png') }}" alt="Facebook" width="30" height="30">
            </a>
            <a href="" class="p-2 m-1 rounded-3 bg-sec" data-bs-toggle="tooltip" data-bs-title="Autenticar com o LinkedIn" data-bs-placement="bottom">
                <img src="{{ asset('/images/LinkedIn.png') }}" alt="LinkedIn" width="30" height="30">
            </a>
            <a href="" class="p-2 m-1 rounded-3 bg-sec" data-bs-toggle="tooltip" data-bs-title="Autenticar com o GitHub" data-bs-placement="bottom">
                <img src="{{ asset('/images/GitHub.png') }}" alt="GitHub" width="30" height="30">
            </a>
        </div>
    </div>
</div>