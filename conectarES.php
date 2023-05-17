<?php
	function conn()
	{
		$user = "root";
		$server = "localhost";
		$pass = "";
		$db = "estudiosocioeconomico";
		$conectar = mysqli_connect($server, $user, $pass, $db);
		return $conectar;
	}
?>