<?php

class Controller_Home extends Controller
{
    public function before()
    {
        if (Session::get('autenticado') != true){
            Response::redirect(Url::base_url() .'login' , 'refresh');
        }
    }

    public function action_index()
    {
         $view = View::forge('layouts/home.tpl');
         $view->set_global('title', 'Home');
         $view->set_global('modulo', 'Accesos');
         $view->set_global('csss', ['assets/login/css/index']);
         $view->set_global('partial', 'home/index.tpl');

         return $view;
    }
}
?>