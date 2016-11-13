<?php
/* Smarty version 3.1.30, created on 2016-11-13 07:06:57
  from "C:\xampp\htdocs\hotelDumort\templates\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58280301eb07a5_80165955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd31986f89db5a1a630f800343b726ebb512fbcbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelDumort\\templates\\index.html',
      1 => 1479004874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:componentes/footer.html' => 1,
    'file:componentes/js.html' => 1,
  ),
),false)) {
function content_58280301eb07a5_80165955 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Pone un icono en la pestaña -->
    <link rel="shortcut icon" href="../image/iconHotel.png">

    <!--hoja de estilos -->
    <link rel="stylesheet" type="text/css" href="../css/main.css" >
    <link rel="stylesheet" type="text/css" href="../css/estilos.css" >
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/perfil_usuario.css" >

      <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
  </head>
<body >

    <div id="wrapper">
      <?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

      <?php }?>

<!-- Slider para las imagenes -->
      <div class="row">
    		<div class="col-md-12">
    			<div class="carousel slide" id="carousel-727141">
    				<ol class="carousel-indicators">
    					<li data-slide-to="0" data-target="#carousel-727141">
    					</li>
    					<li data-slide-to="1" data-target="#carousel-727141" class="active">
    					</li>
    					<li data-slide-to="2" data-target="#carousel-727141">
    					</li>
    				</ol>
    				<div class="carousel-inner">
    					<div class="item">
    						<img alt="Carousel Bootstrap First" src="../image/banners/paquetes.jpg">
    						<div class="carousel-caption">
    							<h4>
    								Administra a tus clientes
    							</h4>
    							<p>
    								El sistema de reserva te ofrece una manera sencilla de poder
                    administrar a tus clientes
    							</p>
    						</div>
    					</div>
    					<div class="item active">
    						<img alt="Carousel Bootstrap Second" src="../image/banners/cancun.jpg">
    						<div class="carousel-caption">
    							<h4>
    								Promocion de fin de año
    							</h4>
    							<p>
    								Se acercan las vacacciones, y el buen fin.
    							</p>
    						</div>
    					</div>
    					<div class="item">
    						<img alt="Carousel Bootstrap Third" src="../image/banners/gdl.jpg">
    						<div class="carousel-caption">
    							<h4>
    								Paquetes disponibles
    							</h4>
    							<p>
    								Son tiempos dificiles, pero hay un paquete a tu medida.
    							</p>
    						</div>
    					</div>
    				</div> <a class="left carousel-control" href="#carousel-727141" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-727141" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    			</div>
    		</div>
    	</div>


        <div class="contenedor" >

            <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3>
                </div>

                  <h1 class="titulo">Hotel Dumort </h1>

                <div class="row">
                    <div class="col-md-4"></div>
                      <div class="col-md-4">
                        <?php if (isset($_smarty_tpl->tpl_vars['flag']->value)) {?>
                          <?php if ($_smarty_tpl->tpl_vars['flag']->value == "true") {?>
                            <p> <img class="img-responsive img-thumbnail" src="mifoto.php" height="5" alt="5" > </p>
                            <?php } else { ?>
                            <p> <img class="img-responsive img-thumbnail" src="../image/avatar.png" height="5" alt="5" > </p>
                          <?php }?>
                          <?php } else { ?>
                            <p> <img class="img-responsive img-thumbnail" src="../image/avatar.png" height="5" alt="5" > </p>
                        <?php }?>

                        </div>
                </div>
            </div>
        </div> <!--Fin jumbotron-->

      <?php $_smarty_tpl->_subTemplateRender("file:componentes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div> <!--fin del wrapper-->

    <!-- CODIGO JAVASCRIPT -->
    <?php $_smarty_tpl->_subTemplateRender("file:componentes/js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
