<?php
/**Formulario para la recuperacion del correo */
	include('../controllers/login.php');

	$web=new Login;
	$accion=null;
	$templates=$web->template();  // Inicializar smarty
	$header=$web->Privilegiosheader("X");

	if( isset($_GET['accion'])){
		$accion=$_GET['accion'];
	}

	// Casos a realizar
	switch ($accion)
	{
		case 'validar': //Valida el correo enviado
		  	$correo=$_POST['correo'];

		  	// Validar si la variable para cumplir la expresion regular del correo

			//Se realiza una consulta para ver si coincide el correo
		  	$sql= "select id_usuario from usuario where email='$correo'";
		  	$resultado=array();
		  	$resultado=$web->fetchAll($sql);

		  	//si hay un registro que coincide
		  	if(isset($resultado[0]))
		  	{
		  		//Genera la clave para la recuperacion del correo
		  		$cadena1=md5( rand(1,1000000) );
		  		$cadena2=md5(md5( sha1(($resultado[0]['id_usuario'].$correo.rand(1,9999))) ).rand(1,1000000).$cadena1);
		  		$cadena=$cadena1.$cadena2;

		  		//Se actualiza la tabla usuario
		  		$web->setTabla("usuario");

		  		// Se agregan los campos restantes
		  		$datos['id_usuario']=$resultado[0]['id_usuario'];
		  		$datos['clave']=$cadena;

				// Funcion para obtener la fecha actual mas dos dias
		  		$fecha = date('Y-m-j');
				$nuevafecha = strtotime ( '+2 day' , strtotime ( $fecha ) ) ;
				$nuevafecha = date ( 'Y-m-j' , $nuevafecha );

		  	$datos['fecha_clave']=$nuevafecha ;
				 $web->update( $datos,array('id_usuario'=>$resultado[0]));

		  	// aqui voy a mandar el email

		  	$web->forgotPassword($correo, $cadena);

				$templates->assign("valido","Se ha enviado un correo electronico con un vinculo , tiene dos dias para realizar el cambio");
		  	}else
		  	{
		  		// Se envia mensaje
		  		$templates->assign("invalido","No existe el correo electronico");
		  	}
		break; // Fin valida

		case 'recuperar':

			/**Obtiene la fecha de dos dias despues */
			$fecha = date('Y-m-j');
			$nuevafecha = strtotime ( '+2 day' , strtotime ( $fecha ) ) ;
			$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
			$clave="*";	//La clave predeterminada para que no coincida

			//
			if(isset($_GET['clave']))
			{
				$clave=$_GET['clave'];
			}

			//Consulta para saber si la clave coincide
			$sql="select id_usuario from usuario where clave='$clave' and fecha_clave>= $nuevafecha";

		  	$resultado=array();
		  	$resultado=$web->fetchAll($sql);
		  	// si hay un registro que coincide
		  	if(isset($resultado[0]))
		  	{
		  		$templates->assign("clave",$clave);
					$templates->assign("id_usuario",$resultado[0]['id_usuario']);
		  		$templates->display("forgot_recuperar.html");
		  		die();
		  	}
		  	else
		  	{
		  		$templates->assign("mensaje","Clave invalida");
		  	}
		break;
		case 'restablecer': //Valida el correo enviado
			$clave=$_POST['clave'];
			if (strcmp ($_POST['contrasena'] , $_POST['contrasena2'] ) == 0)
				{
		  		$datos=array('contrasena'=>md5($_POST["contrasena"]),'clave'=>'-',"fecha_clave"=>'-');
					$web->setTabla("usuario");
					$web->update( $datos,array('id_usuario'=>$_POST['id_usuario']));

				}
				else{

					$templates->assign("clave",$clave);
					$templates->assign("pass","Las contraseñas no coinciden");
					$templates->display("forgot_recuperar.html");
				}
			die();
		break;
	}
	$templates->assign("header",$header);
	$templates->display("forgot.html")
 ?>
