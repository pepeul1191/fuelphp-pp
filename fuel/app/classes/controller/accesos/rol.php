<?php

class Controller_Accesos_Rol extends Controller
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
        $view->set_global('title', 'Accesos/Permisos');
        $view->set_global('modulo', 'Accesos');
        $view->set_global('titleForm', 'Gestione los Roles del Sistema y sus Respectivos Permisos');
        $view->set_global('rutaForm', 'Accesos / Funciones / Roles');
        $view->set_global('csss', ['bower_components/swp-plugins/assets/css/mootools.grid']);
        $view->set_global('jss', ['bower_components/swp-plugins/assets/js/mootools.dao', 'bower_components/swp-plugins/assets/js/mootools.form', 'bower_components/swp-plugins/assets/js/mootools.observer', 'bower_components/swp-plugins/assets/js/mootools.grid', 'bower_components/swp-plugins/assets/js/mootools.chain', 'assets/accesos/rol/js/index']);
        $view->set_global('partial', 'accesos/rol/index.tpl');

        return $view;
    }

    public function action_listar()
    {
        $rest = new Rest(Url::get_service('accesos') . 'rol/listar');
        
        return $rest->get();
    }

    public function action_guardar()
    {
        $data = Input::post('data'); 
        $rest = new Rest(Url::get_service('accesos') . 'rol/guardar?data=' . $data);
        
        return $rest->post();
    }

    public function action_asociar_permisos()
    {
        $data = Input::post('data'); 
        $rest = new Rest(Url::get_service('accesos') . 'rol/ascociar_permisos?data=' . $data);
        
        return $rest->post();
    }
}

?>