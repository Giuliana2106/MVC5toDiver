<?php
/* Smarty version 3.1.39, created on 2021-07-06 17:36:22
  from 'C:\xampp\htdocs\MVC5toDiver\Inventario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e47876258457_22085403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a49709df64e7a0d0001ef9a96ba6748034af425f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC5toDiver\\Inventario.tpl',
      1 => 1625585768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/Cabeceras/Header.tpl' => 1,
    'file:Templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60e47876258457_22085403 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div align="center">
<h1>Registro de Inventario</h1>
</div>

<div class="card-panel pink darken-4"></div>

<div class="col s8">
 <form method="POST" action="?class=Inventario&method=IngresoInventario">
    <div class="input field col s8">
    <input id="nombre" type="text" name="nombre"/>
    <label for="nombre">Nombre del Producto</label>
    </div>

    <div class="input field col s8">
    <input id="descripción" name="descripción">
    <label for="descripción">Descripción del Producto</label>
    </div>

    <div class="input field col s8">
    <input id="cantidad" name="cantidad">
    <label for="cantidad">Cantidad del Producto</label>
    </div>

    <div class="input field col s8">
    <input id="precio" name="precio">
    <label for="precio">Precio del Producto</label>
    </div>

    <div class="input field col s8">
    <input id="fecha" type="date" name="fecha">
    <label for="fecha">Fecha de registro</label>
    </div>

    <div class="row">
        <div class="input-field col s8 center-align">
        <input class="waves-effect waves-light btn" type="submit" value="Guardar Producto">
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:Templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
