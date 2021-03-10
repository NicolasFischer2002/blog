<?php

include_once 'config.php';

$usuarios = filter_imput(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

$result_user = "SELECT * FROM artigos WHERE conteudo LIKE '%usuarios%' LIMIT 20"

$resultado_user = mysqli_query($conn, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
	while($row_user = mysqli_fetch_assoc($resultado_user)){
		echo "<li>".$row_user['nome']."</li>";
	}
}else{
	echo "Nenhum usuário encontrado ...";
}

?>