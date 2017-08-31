<?php
/**
 * Created by PhpStorm.
 * User: Vinny
 * Date: 25/07/2017
 * Time: 09:11
 */
require('login/session.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Dashboard | Produtora</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/btnico.css">
    <link rel="stylesheet" href="assets/css/custon.min.css">
    <link rel="stylesheet" href="assets/css/geral.css">
</head>
<body>

<!-- menu de navegação -->
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
                <li><a href="index.php"><b>INICIO</b> <span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="#"><b>EDITOR</b> </a></li>
                <li><a href="graficos.php"><b>GRAFICOS</b> </a></li>
                <li><a href="informaçoes.php"><b>INFORMAÇÕES</b> </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"><b>FUNÇÕES</b> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">usuarios</a></li>
                        <li><a href="choice.php?dummy=bWFwZGF0YQ==">Mapa das barracas</a></li>
                        <li><a href="choice.php?dummy=dGVzdA==">Espositores</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Artistas</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="choice.php?dummy=YWRtaW5fbG9n">Administradores</a></li>
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
<!-- fim do menu de navegação -->

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Editar assunto <b>Noticias</b></h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div id="alerts"></div>
            <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b
                                class="caret"></b></a>
                    <ul class="dropdown-menu">
                    </ul>
                </div>

                <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i
                                class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a data-edit="fontSize 5">
                                <p style="font-size:17px">Grande</p>
                            </a>
                        </li>
                        <li>
                            <a data-edit="fontSize 3">
                                <p style="font-size:14px">Normal</p>
                            </a>
                        </li>
                        <li>
                            <a data-edit="fontSize 1">
                                <p style="font-size:11px">Pequeno</p>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="btn-group">
                    <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                    <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                    <a class="btn" data-edit="strikethrough" title="Strikethrough"><i
                                class="fa fa-strikethrough"></i></a>
                    <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                </div>

                <div class="btn-group">
                    <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                    <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                    <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i
                                class="fa fa-dedent"></i></a>
                    <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                </div>

                <div class="btn-group">
                    <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i
                                class="fa fa-align-left"></i></a>
                    <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i
                                class="fa fa-align-center"></i></a>
                    <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i
                                class="fa fa-align-right"></i></a>
                    <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i
                                class="fa fa-align-justify"></i></a>
                </div>

                <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i
                                class="fa fa-link"></i></a>
                    <div class="dropdown-menu input-append">
                        <input class="span2" placeholder="URL" data-edit="createLink" type="text">
                        <button class="btn" type="button">Add</button>
                    </div>
                    <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                </div>

                <div class="btn-group">
                    <a class="btn" title="Insert picture (or just drag &amp; drop)" id="pictureBtn"><i
                                class="fa fa-picture-o"></i></a>
                    <input data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" type="file">
                </div>

                <div class="btn-group">
                    <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                    <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                </div>
            </div>

            <div id="editor-one" class="editor-wrapper placeholderText" contenteditable="true"></div>

            <textarea name="descr" id="descr" style="display:none;"></textarea>

            <br>

            <div class="ln_solid"></div>

            <div class="form-group">
                <label class="col-md-4">Area de craditos.</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea class="resizable_textarea form-control"
                              placeholder="oque for digitado aqui pode e irá aparecer na area de creditos do autor do post se não inserir nada fica como credito da produtora"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- javascript -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- fim do  javascript -->
</body>
</html>
