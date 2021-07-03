<?php
    class Usuario
    {
        public function BuscarUsuario($user, $pass)
        {
            $con = new Conexion();
            $consulta=$con->query("SELECT * FROM `usuario` WHERE `Nombre`='$user' AND 'Password'=$pass");
            $con->close();
            return $consulta;
        }
    }
?>