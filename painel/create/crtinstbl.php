<?php

session_start();
include('../connection.php');
$connection = new createConnection();
$connection_ref = $connection->connectToDatabase();


$num_fields = $_SESSION['num_flds'];
$selected_table_name = $_SESSION["tblname"];


$str = "INSERT INTO " . $selected_table_name . " VALUES(''";


for ($y = 1; $y < $num_fields; $y++) {
    $str = $str . ",'$_POST[$y]'";

}
$str = $str . ");";

$re_result = mysqli_query($connection_ref, $str);


echo "<script>
		var r = confirm('Novo usuario adicionado ao banco de dados com sucesso !');
    		if (r == true) 
		{
			window.location.assign('index.php');    
		} 
		else 
		{
        		window.location.assign('../edit');
	    	}
	</script>";
?>
