<?php
/* Smarty version 3.1.39, created on 2021-07-07 20:27:57
  from 'C:\xampp\htdocs\MVC5toDiver\templates\VerInventario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e5f22d243f22_96607263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f95038708e52efbc9ee29a8952d93acc67272383' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC5toDiver\\templates\\VerInventario.tpl',
      1 => 1625602372,
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
function content_60e5f22d243f22_96607263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="input-field col s12">
        <h1 class="center align">Ver Inventario</h1>
    </div>
</div>

<div class="row">
    <?php $_smarty_tpl->_subTemplateRender('file:Navs/BarraLateral.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="col s8">
        <table>
            <thead>
                <tr>
                    <th>Nombre del Producto</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                </tr>          
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inventario']->value, 'invent');
$_smarty_tpl->tpl_vars['invent']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['invent']->value) {
$_smarty_tpl->tpl_vars['invent']->do_else = false;
?>
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['invent']->value['Nombre'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['invent']->value['Descripción'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['invent']->value['Cantidad'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['invent']->value['Precio'];?>

                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:Templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
