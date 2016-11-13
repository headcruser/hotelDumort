<?php
/* Smarty version 3.1.30, created on 2016-11-13 07:06:58
  from "C:\xampp\htdocs\hotelDumort\templates\login_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5828030241c282_99417215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b14a18f5dcc095778d51d1f2ca27e4c76c1cfbfb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelDumort\\templates\\login_form.html',
      1 => 1478993049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:componentes/estilos.html' => 1,
    'file:componentes/js.html' => 1,
  ),
),false)) {
function content_5828030241c282_99417215 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <link rel="stylesheet" type="text/css" href="../css/login.css" >
      <title>Login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="../css/main.css" >
</head>
<body>


    <div id="wrapper">
      <?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

      <?php }?>


     <div id="contenedor">

          <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
          <div class="media">
            <div class="alert alert-danger" role="alert">
            <strong> ERROR:</strong>
            <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

            </div>
          </div>
          <?php }?>

          <div class="container well" id="sha">

              <!-- Avatar -->
              <div class="row">
                  <div class="col-xs-12">
                    <img src="../image/avatar.png" class="img-responsive" id="avatar">
                  </div>
              </div>

              <?php if (isset($_smarty_tpl->tpl_vars['titulo']->value)) {?>
                  <h1 class="titulo"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
                  <?php } else { ?>
                  <h1 class="titulo">Hotel Dumort</h1>
                <?php }?>

                <!-- Formulario login -->
                  <form class="login" method="POST" action="login.php?accion=login">

                      <!-- Email -->
                      <div class="form-group">
                      <input type="email" class="form-control" placeholder="Correo electrónico" name="email" required autofocus>
                      </div>

                      <!-- Password -->
                      <div class="form-group">
                            <input type="password" class="form-control" placeholder="Contraseña" name="contrasena" required>
                      </div>

                        <!-- Boton  -->
                      <div class="form-group">
                        <div class="enviar">
                                <p> <input class="btn btn-lg btn-primary btn-block" type="submit" value="INGRESAR"></p>
                        </div>
                      </div>

                      <!-- Olvidaste tu contraseña -->
                      <div class="checkbox">
                          <p class="help-block"><a href="forgot.php">¿Olvidaste tu contraseña </a></p>
                      </div>
                </form>
          </div>
        </div>
  </div>
        <?php $_smarty_tpl->_subTemplateRender("file:componentes/js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
