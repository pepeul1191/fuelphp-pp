<?php

class Controller_Accesos_Usuario extends Controller
{
    public function before()
    {
        if (Session::get('autenticado') != true){
            Response::redirect(Url::base_url() .'login' , 'refresh');
        }
    }

    public function action_index()
    {
        $view = View::forge('layouts/application.tpl');
        $view->set_global('title', 'Accesos/Usuarios');
        $view->set_global('modulo', 'Accesos');
        $view->set_global('csss', ['assets/login/css/index']);
        $view->set_global('partial', 'accesos/usuario/index.tpl');

        return $view;
    }
}

?>