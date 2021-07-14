<?php
    class User
    {
        public function Login()
        {
            $persona = new Usuario();
            $smarty= new Smarty();
            $user=$_POST['nombre'];
            $pass=$_POST['pass'];

            $dato=$persona->BuscarUsuario($user, $pass);

            if ($dato->num_rows==1)
            {
                $smarty->assign('nombre', 'Inventario');
                $smarty->display('Inventario.tpl');  
            }
            else
            {
                $smarty->display('Home.tpl');
            }

        }

       public function Update()
       {
           echo"en update";
       }

       public function Delete()
       {
           echo"en delete";
       }
    }
?>