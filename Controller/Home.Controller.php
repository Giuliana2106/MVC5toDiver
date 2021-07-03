<?php
    class Home
    {
        public function Inicio()
        {
            $smarty = new Smarty();
            $con = new Conexion();

            $smarty->assign('nombre', 'Inicio de Sesión');
            $smarty->display('Home.tpl');
        }
    }
    
?>