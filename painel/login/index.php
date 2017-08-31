<?php
session_start();
if (isset($_SESSION['login_user'])) {
    header("location: ../");
} else {
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Dashboard | Produtora</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/login.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    </head>
    <body>
    <div>
        <div id="login">
            <div id="main_login">
                <form action="login.php" method="POST">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                        <div class="panel panel-default">

                            <div class="panel-body">
                                <h3 class="thin text-center">Dashboard | Produtora</h3>

                                <p class="text-center text-muted">Caso não seja um administrador da <a
                                            href="#">Produtora</a>
                                    essa pagina não é util para você.</p>
                                <hr>
                                <div class="top-margin">
                                    <label>Nome\Email <span class="text-danger">*</span></label>
                                    <input type="text" id="name" name="username" placeholder="Usuario"
                                           class="form-control">
                                </div>
                                <br/>
                                <div class="top-margin">
                                    <label>Senha <span class="text-danger">*</span></label>
                                    <input type="password" id="password" name="password" placeholder="senha"
                                           class="form-control">
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <b><a href="#">Perdeu a senha ?</a></b>
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <button type="submit" name='submit' class="btn btn-primary btn-large"
                                                value="login">
                                            ENTRAR
                                        </button>
                                    </div>
                                    <hr>
                                    <div>
                                        <p class="text-center text-muted">©2017 Todos os direitos reservados. Produtora
                                            independente</p>
                                    </div>

                </form>
            </div>
        </div>
        <div>
            <script src="../assets/js/bootstrap.min.js"></script>
            <script src="../assets/js/jquery.min.js"></script>
    </body>
    </html>
    <?php
}
?>