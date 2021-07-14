<?php
    class Inventario
    {
        public function VerInventario()
        {
            echo "En Ver Inventario";
        }

        public function IngresoInventario()
        {
            $invent = new Invent();
            $smarty = new Smarty();

            $nombre = $_POST['nombre'];
            $desc = $_POST['descripción'];
            $cantidad = $_POST['cantidad'];
            $precio = $_POST['precio'];
            $fecha = $_POST['fecha']; 

            $in=$invent->GuardarInventario($nombre, $desc, $cantidad, $precio, $fecha);
            $smarty->assign('nombre', 'Inventario');
            $smarty->display('Inventario.tpl');
        }
    } 
?>