<?php
/* Smarty version 3.1.39, created on 2021-07-06 21:49:08
  from 'C:\xampp\htdocs\MVC5toDiver\templates\Inventario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e4b3b4d0c1b3_52124917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '302c6cd55368cd20abc182250577f62f470c9b82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC5toDiver\\templates\\Inventario.tpl',
      1 => 1625600206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/BarraLateral.tpl' => 1,
    'file:Templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60e4b3b4d0c1b3_52124917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div align="center">
<h1>Registro de Inventario</h1>
</div>

<div class="card-panel pink darken-4"></div>

<div class="container">
<?php $_smarty_tpl->_subTemplateRender('file:Navs/BarraLateral.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="col s8">
 <form method="POST" action="?class=Inventario&method=IngresoInventario">
 <div class="row">
 <div class="input-field col s12">
   <input id="nombre" type="text" name="nombre">
   <label for="nombre">Nombre del Producto</label>
 </div>
</div>

<div class="row">
<div class="input-field col s12">
  <input id="descripción" type="text" name="descripción">
  <label for="descripción">Descripción del Producto</label>
</div>
</div>

<div class="row">
<div class="input-field col s12">
  <input id="cantidad" type="number" name="cantidad">
  <label for="cantidad">Cantidad del Producto</label>
</div>
</div>

<div class="row">
<div class="input-field col s12">
  <input id="precio" type="number" name="precio"">
  <label for="precio">Precio del Producto</label>
</div>
</div>

<div class="row">
<div class="input-field col s12">
  <input id="fecha" type="date" name="fecha">
  <label for="fecha">Fecha de Registro</label>
</div>
</div>

    <div class="row">
        <div class="input-field col s8 center-align">
        <input class="waves-effect waves-light btn" type="submit" value="Guardar Producto">
        </div>
    </div>
</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:Templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
