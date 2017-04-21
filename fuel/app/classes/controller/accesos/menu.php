<?php

class Controller_Accesos_Menu extends Controller
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
        $view->set_global('title', 'Accesos/Menus');
        $view->set_global('modulo', 'Accesos');
        $view->set_global('titleForm', 'Gestione el Menú del Sistema');
        $view->set_global('rutaForm', 'Accesos / Menú');
        $view->set_global('csss', ['bower_components/swp-plugins/assets/css/mootools.grid', 'assets/accesos/menu/css/index']);
        $view->set_global('jss', ['bower_components/swp-plugins/assets/js/mootools.dao', 'bower_components/swp-plugins/assets/js/mootools.form', 'bower_components/swp-plugins/assets/js/mootools.observer', 'bower_components/swp-plugins/assets/js/mootools.grid', 'bower_components/swp-plugins/assets/js/mootools.chain', 'assets/accesos/menu/js/index']);
        $view->set_global('partial', 'accesos/menu/index.tpl');

        return $view;
    }
}

?>