<div class="w-100">
    <div class="title-wecome w-100 mb-3">
        <div class="w-100 d-flex justify-content-center align-items-center mb-4">
            <img src="{{ asset('images/logo.png') }}" alt="logo" width="40">
            <h2 class="ms-2 mb-0 fs-2 text-color-1 fw-normal">Schedify.</h2>
        </div>
        <div class="d-flex justify-content-center">
            <h3 class="fs-4 fw-light text-color-2">Bem vindo de volta</h3>
        </div>
    </div>
    <form action="" class="needs-validation">
        <div class="mb-3">
            <label for="floatingInput" class="mb-1 text-secondary fw-medium">E-mail:</label>
            <div class="input-group">
                <label for="floatingInput" class="input-group-text bg-sec text-color-2 border-color">@</label>
                <input type="email" class="form-control form-control-lg fs-6 bg-pry border-color text-color-1" required id="floatingInput" placeholder="name@example.com">
            </div>
        </div>
        <div class="mb-3">
            <label for="floatingPassword" class="mb-1 text-secondary fw-medium">Senha:</label>
            <div class="input-group">
                <label for="floatingPassword" class="input-group-text bg-sec text-color-2 border-color">|**</label>
                <input type="password" class="form-control form-control-lg fs-6 bg-pry border-color text-color-1" required id="floatingPassword" placeholder="Password">
            </div>
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input bg-pry border-color" role="button" type="checkbox" value="" id="flexCheckIndeterminate">
            <label class="form-check-label text-color-2" role="button" for="flexCheckIndeterminate">
                Lembrar conexão
            </label>
          </div>
        <div class="mt-4 mb-3 w-100">
            <button class="w-100 btn btn-main" type="submit">Login</button>
          </div>
    </form>
</div>