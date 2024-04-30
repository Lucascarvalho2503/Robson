<html>
    <head>
        <title>Cadastro</title>
        <meta charset="utf-8">
        <link rel="icon" href="favicon.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    </head>
    <body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
          </div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Registre-se</h5>
            <form>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputUsername" placeholder="myusername" required autofocus>
                <label for="floatingInputUsername">Nome de usúario</label>
              </div>

              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
                <label for="floatingInputEmail">Email</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputCpf" placeholder="000.000.000-00">
                <label for="floatingInputCpf">Cpf</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputWhats" placeholder="(00)00000-0000">
                <label for="floatingInputWhats">WhatsApp</label>
              </div>

              <div class="form-floating mb-3">
                <input type="file" class="form-control" id="floatingInputPhoto">
                <label for="floatingInputPhoto"></label>
              </div>

              <hr>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Senha</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Confirm Password">
                <label for="floatingPasswordConfirm">Confirmar senha</label>
              </div>

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Registre-se</button>
              </div>

              <a class="d-block text-center mt-2 small" href="login.php">Já tem uma conta? Entre</a>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>