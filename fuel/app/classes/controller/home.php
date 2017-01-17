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
        if (Session::get('autenticado') == true){
           $view = View::forge('layouts/application/layout');
           $view->set_global('title', 'Home');
           $view->set_global('modulo', 'Accesos');
           $view->header = View::forge('layouts/application/header');
           $view->content = View::forge('home/index');
           $view->footer = View::forge('layouts/application/footer');

           return $view;
        }else{
           Response::redirect('login');
        }
	}
}
?>