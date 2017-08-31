

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard | Produtora</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="../index.php"><b>INICIO</b> <span class="sr-only">(current)</span></a></li>
                <li><a href="choice.php?dummy=YWRtaW5fbG9n"><b>USUARIOS</b> </a></li>
                <li><a href="choice.php?dummy=bWFwZGF0YQ=="><b>ESTATISTICAS</b> </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Funçoes <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="choice.php?dummy=YWRtaW5fbG9n">Usuarios</a></li>
                        <li><a href="choice.php?dummy=bWFwZGF0YQ==">Mapa do Site</a></li>
                        <li><a href="choice.php?dummy=dGVzdA==">teste</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Procurar">
                </div>
                <button type="submit" class="btn btn-warning">Submeter</button>
            </form>
            <ul class="nav navbar-nav navbar-right">

                <li role="presentation"><a href="#">Alertas <span class="label label-success">0</span></a></li>
                <li role="presentation"><a href="#">Mensagens <span class="label label-info">0</span></a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Usuario <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Opções</a></li>
                        <li><a href="#">Perfil</a></li>
                        <li><a href="#">ADM</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="login/logout.php">Sair</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>