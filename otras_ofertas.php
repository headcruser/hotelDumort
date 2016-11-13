<?php 
  include('hotel_class.php');
  $web=new Chotel;
  $templates=$web->template();
  $templates->display('publico/otras_ofertas.html'); // llama a la vista
 ?>