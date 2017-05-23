<?php

class Controller_Maestros_TiposAlmacen extends Controller
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
        $view->set_global('title', 'Maestros/Tipos de Almacenes');
        $view->set_global('modulo', 'Maestros');
        $view->set_global('titleForm', 'Gestione los Tipos de Almacenes');
        $view->set_global('rutaForm', 'Maestros / Tipos de Almacenes');
        $view->set_global('csss', ['bower_components/swp-plugins/assets/css/mootools.grid', 'bower_components/swp-plugins/assets/css/mootools.autocomplete']);
        $view->set_global('jss', ['bower_components/swp-plugins/assets/js/mootools.dao', 'bower_components/swp-plugins/assets/js/mootools.form', 'bower_components/swp-plugins/assets/js/mootools.observer', 'bower_components/swp-plugins/assets/js/mootools.grid', 'bower_components/swp-plugins/assets/js/mootools.chain', 'assets/maestros/tipos_almacen/js/index']);
        $view->set_global('partial', 'maestros/tipos_almacen/index.tpl');

        return $view;
    }

    public function action_listar()
    {
        $rest = new Rest(Url::get_service('administracion') . 'tipos_almacen/listar');
        
        return $rest->get();
    }

    public function action_guardar()
    {
        $data = Input::post('data'); 
        $rest = new Rest(Url::get_service('administracion') . 'tipos_almacen/guardar?data=' . $data);

        return $rest->post();
    }
}

?>