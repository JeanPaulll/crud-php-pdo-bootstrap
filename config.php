<?php
//CONEXÃO PDO www.jeanweb.com.br
$conn = 'mysql:host=localhost;dbname=pdo';

try {
	$db = new PDO($conn, 'root', '');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	if($e->getCode() == 1049){
		echo "Erro no banco de dados JEANWEB.COM.BR.";
	}else{
		echo $e->getMessage();
	}
}
?>
