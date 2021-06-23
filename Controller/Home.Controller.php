<?php
    class Home
    {
        public function Inicio()
        {
            $smarty = new smarty();

            $vec = array();

            $vec=[
                ['nombre'=>'Giuliana', 'pass'=>'123'],
                ['nombre'=>'Keyli', 'pass'=>'456'],
                ['nombre'=>'Natalia', 'pass'=>'789'],
                ['nombre'=>'Aura', 'pass'=>'321'],
            ];

            $smarty->assign ('datos',$vec);
            $smarty->assign('nombre', 'Inicio de Sesión');
            $smarty->display('Home.tpl');
        }
    }
    
?>