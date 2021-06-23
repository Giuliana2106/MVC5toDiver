<?php
/* Smarty version 3.1.39, created on 2021-06-11 16:37:47
  from 'C:\xampp\htdocs\MVC5toDiver\Templates\Cabeceras\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c3753b07eb89_43566687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ceea7e80324c0cf465c3ecc442356ccbc097e8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC5toDiver\\Templates\\Cabeceras\\Header.tpl',
      1 => 1623420711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c3753b07eb89_43566687 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Framework/Materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>
      <?php if ((isset($_smarty_tpl->tpl_vars['nombre']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>

      <?php } else { ?>
        Home
      <?php }?>
      </title>
    </head>

    <body>

    <?php }
}
