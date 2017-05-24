<?php

class Controller_Administracion_Proveedor extends Controller
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
        $view->set_global('title', 'Administración/Proveedor');
        $view->set_global('modulo', 'Administracion');
        $view->set_global('titleForm', 'Gestione Los Proveedores');
        $view->set_global('rutaForm', 'Administración / Proveedor');
        $view->set_global('csss', ['bower_components/swp-plugins/assets/css/mootools.grid', 'bower_components/swp-plugins/assets/css/mootools.autocomplete','assets/accesos/proveedor/css/index']);
        $view->set_global('jss', ['bower_components/swp-plugins/assets/js/mootools.dao', 'bower_components/swp-plugins/assets/js/mootools.form', 'bower_components/swp-plugins/assets/js/mootools.observer', 'bower_components/swp-plugins/assets/js/mootools.grid', 'bower_components/swp-plugins/assets/js/mootools.chain', 'bower_components/swp-plugins/assets/js/mootools.autocomplete','assets/administracion/proveedor/js/index']);
        $view->set_global('partial', 'administracion/proveedor/index.tpl');

        return $view;
    }

     public function action_nuevo()
    {
        $view = View::forge('layouts/application.tpl');
        $view->set_global('title', 'Administración/Proveedor/Nuevo');
        $view->set_global('modulo', 'Administracion');
        $view->set_global('titleForm', 'Ingrese los Datos del Nuevo Proveedor');
        $view->set_global('rutaForm', 'Administración / Proveedor / Nuevo');
        $view->set_global('csss', ['bower_components/swp-plugins/assets/css/mootools.autocomplete','assets/accesos/proveedor/css/index']);
        $view->set_global('jss', ['bower_components/swp-plugins/assets/js/mootools.chain', 'bower_components/swp-plugins/assets/js/mootools.dao', 'bower_components/swp-plugins/assets/js/mootools.autocomplete','assets/administracion/proveedor/js/proveedor']);
        $view->set_global('partial', 'administracion/proveedor/proveedor.tpl');

        return $view;
    }

    public function action_listar()
    {
        $rest = new Rest(Url::get_service('administracion') . 'proveedor/listar');
        return $rest->get();
    }

    public function action_guardar()
    {
        $data = Input::post('data'); 
        $rest = new Rest(Url::get_service('administracion') . 'proveedor/guardar?data=' . $data);
        return $rest->post();
    }
}

?>