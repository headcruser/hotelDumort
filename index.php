<?php 
  include('hotel_class.php');
  $web=new Chotel;
  $templates=$web->template();
  $templates->display('publico/index.html'); // llama a la vista
 ?>