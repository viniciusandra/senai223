<?php
include('../login/session.php');
include('../session.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>DASBOARD PRODUTORA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/main.css">


</head>

<body>
<div class="row affix-row">
    <?php require('../side.php'); ?>
    <div class="jumbotron">
        <div class="container">
            <div class="page-header">
                <?php
                $num_rec_per_page = 5;
                include('../connection.php');
                $connection = new createConnection();
                $connection_ref = $connection->connectToDatabase();
                // $connection->selectDatabase();
                $selected_table_name = $_SESSION["tblname"];
                ?><br>
                <button class="btn btn-success disabled text-uppercase"><span
                            class="glyphicon glyphicon-folder-open"></span> <?php echo $selected_table_name; ?></button>
            </div>
            <p>
                <?php
                $sql = "SELECT * FROM " . $selected_table_name;
                $rs_result = mysqli_query($connection_ref, $sql);
                if ($rs_result === FALSE) {
                    die(mysqli_error()); // TODO: better error handling
                }
                $num_fields = mysqli_num_fields($rs_result);
                $_SESSION['num_flds'] = $num_fields;
                $skipid = 0;
                ?>
            <div class="row">
                <div class="col-lg-5">
                    <div class="progress pull-right">
                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar"
                             aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            <a href="../cancel.php" style="color:#fff;">CANCEL </a>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped active" role="progressbar"
                                     aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                    <span class="sr-only">STATUS</span>
                                </div>
                            </div>
                            <div class="btn-group" role="group" aria-label="...">
                                <button class="btn btn-default disabled">STATUS</button>
                                <button class="btn btn-primary disabled">ADD</button>
                            </div>
                            <form action="crtinstbl.php" method="post">
                                <?php
                                $finfo = mysqli_fetch_fields($rs_result);
                                foreach ($finfo as $fieldinfo) {
                                    if ($skipid == 0) {
                                        $skipid++;
                                        continue;
                                    }
                                    ?>
                                    <span class="text-uppercase"
                                          style="font-weight:600!important;"><?php printf("%s\n", $fieldinfo->name); ?></span>
                                    <?php
                                    if (strval($fieldinfo->type) != "BLOB" && strval($fieldinfo->type) != "blob") {
                                        ?>
                                        <div class="input-group">
                                            <span class="input-group-addon"><span
                                                        class="glyphicon glyphicon-pencil"></span></span>
                                            <input type="text" name="<?php echo $skipid; ?>" class="form-control"
                                                   required>
                                        </div>
                                        <?php
                                    } else {
                                        ?>
                                        <span class="glyphicon glyphicon-book"></span>
                                        <textarea name="<?php echo $skipid; ?>" class="form-control" rows="5"
                                                  id="comment" required></textarea>
                                        <?php
                                    }
                                    $skipid++;
                                    //echo $skipid;
                                    ?>
                                    <!--sub class="label label-warning pull-right"><?php printf("max Length: %d\n", $fieldinfo->max_length); ?></sub-->
                                    <?php
                                    echo "<hr>";
                                }
                                ?>
                                <input class="btn btn-info" type="submit" value="ADICIONAR USUARIO">
                                <input class="btn btn-warning" type="reset" value="LIMPAR">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                </div>
                <div class="col-lg-5">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <h5 class="text-uppercase">Passos:</h5>
                            <div class="list-group text-capitalize">
                                <li href="#" class="list-group-item ">Na area <b>USERNAME</b> insira o nome de usuario
                                </li>
                                <li href="#" class="list-group-item ">Na area <b>PASSWORD</b> insira a senha de usuario
                                </li>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </p>
        </div>
    </div>
</div>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>
