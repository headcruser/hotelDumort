<?php 
  include('hotel_class.php');
  $web=new Chotel;
  $templates=$web->template();
  $templates->display('publico/vision.html'); // llama a la vista
 ?>