<?php

class Controller_Accesos_Permiso extends Controller
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
        $view->set_global('titleForm', 'Gestione los Permisos de los Usuarios del Sistema');
        $view->set_global('rutaForm', 'Accesos / Funciones / Permisos');
        $view->set_global('csss', ['bower_components/swp-plugins/assets/css/mootools.grid']);
        $view->set_global('jss', ['bower_components/swp-plugins/assets/js/mootools.dao', 'bower_components/swp-plugins/assets/js/mootools.form', 'bower_components/swp-plugins/assets/js/mootools.observer', 'bower_components/swp-plugins/assets/js/mootools.grid', 'bower_components/swp-plugins/assets/js/mootools.chain', 'assets/accesos/permiso/js/index']);
        $view->set_global('partial', 'accesos/permiso/index.tpl');

        return $view;
    }

    public function action_listar()
    {
        $sistema_id = $this->param('sistema_id');
        $rest = new Rest(Url::get_service('accesos') . 'permiso/listar/' . $sistema_id);
        
        return $rest->get();
    }

    public function action_guardar()
    {
        $data = Input::post('data'); 
        $rest = new Rest(Url::get_service('accesos') . 'permiso/guardar?data=' . $data);
        
        return $rest->post();
    }

    public function action_listar_asociados()
    {
        $id_rol = $this->param('id');
        $rest = new Rest(Url::get_service('accesos') . 'permiso/listar_asociados/' . $id_rol);

        return $rest->get();
    }
}

?>