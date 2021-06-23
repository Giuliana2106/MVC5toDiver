<?php
/* Smarty version 3.1.39, created on 2021-06-23 21:13:14
  from 'C:\xampp\htdocs\MVC5toDiver\templates\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d387ca475214_43902694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2db8b326e1f3eeefccc1b2d56f09015f2bbdc117' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC5toDiver\\templates\\Home.tpl',
      1 => 1624475591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/Cabeceras/Header.tpl' => 1,
    'file:Templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60d387ca475214_43902694 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div align="center">
    <h1>Inicie Sesión</h1>
    </div>

    <div class="card-panel blue lighten-3"></div>

    <div class="container">
    <form method="POST" action="?class=user&method=login">
    <div class="row">
    <div class="input-field col s6">
      <input name="nombre" id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2">Nombre</label>
    </div>

    <div class="input-field col s6">
      <input name="pass" id="first_name3" type="password" class="validate">
      <label class="active" for="first_name3">Contraseña</label>
    </div>
  </div>
  <div align="center">
  <button class="btn waves-effect waves-light" type="submit" name="action">Ingresar
  </button>
     </div>
    </form>
</div>
    

<?php $_smarty_tpl->_subTemplateRender("file:Templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
