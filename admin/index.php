<?php
	include('../hotel_class.php');

	$web=new Chotel;
	$templates=$web->template(); //Inicializo smarty
	$privilegio=null;

	 if(isset($_SESSION))
	 {
	 	$privilegio=$_SESSION['roles'][0]['rol'];
		//Login es el usuario predeterminado
		$web->checarAcceso($privilegio);
		$header=$web->Privilegiosheader($privilegio);

		$usuario=$web->fetchAll('select foto
							from usuario where id_usuario='.$_SESSION['id_usuario']);

		if(!empty ($usuario)){
		$templates->assign('flag','true');
		}
		else {
			$templates->assign('flag','false');
		}

		//Asigno variables
		$templates->assign('titulo','HOLA BIENVENIDO');
		$templates->assign('header',$header);
		$templates->display('index.html');
	 }


 ?>
