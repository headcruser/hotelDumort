<?php 
	/**Formulario que construye un reporte de los usuarios*/
	include('../cp_web_class.php');

	$web=new Cpweb; //Crea un objeto de la clase principal
	$privilegio=null;
	$templates=$web->template();

	// Validacion para saber que tipo de header construir
	 if(isset($_SESSION))
	 {
	 	$privilegio=$_SESSION['roles'][0]['rol'];
	 }

	 $header=$web->Privilegiosheader($privilegio);

	// $reporte1=$web->getQueryHtml("SELECT razon_social as 'Razon Social', estado as 'Entidad Federativa ', tipo as 'Tipo de cliente' FROM cliente INNER JOIN estado on cliente.id_estado=estado.id_estado INNER JOIN tipo on cliente.id_tipo=tipo.id_tipo ");

	 //Por alguna razon postgress no me dejo incluir la consulta de arriba
	$reporte1=$web->getQueryHtml("select razon_social as Razon , (select tipo from tipo where id_tipo=cliente.id_tipo) as tipo , (select estado from estado where id_estado=cliente.id_estado ) as Estado from cliente");

	$templates->assign('reporte1',$reporte1);
	$templates->assign('header',$header);
	$templates->display('reporte.html');
 
 ?>