<?php
    class User
    {
        public function Login()
        {
            $persona = new Usuario();
            $user=$_POST['nombre'];
            $pass=$_POST['pass'];

            $dato=$user->BuscarUsuario($user, $pass);

            if ($dato->num_rows==1)
            {
                $smarty->('$nombre', 'Inventario');
                
            }
            else
            {
                echo "no user";
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