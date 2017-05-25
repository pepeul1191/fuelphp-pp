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
        $view->set_global('jss', ['bower_components/swp-plugins/assets/js/mootools.chain', 'bower_components/swp-plugins/assets/js/mootools.dao', 'bower_components/swp-plugins/assets/js/mootools.autocomplete','bower_components/swp-plugins/assets/js/jquery.upload','assets/administracion/proveedor/js/proveedor']);
        $view->set_global('disable', false);
        $view->set_global('partial', 'administracion/proveedor/proveedor.tpl');

        return $view;
    }

    public function action_listar()
    {
        $rest = new Rest(Url::get_service('administracion') . 'proveedor/listar');
        $proveedores = json_decode($rest->get());
        $rpta = [];

        foreach ($proveedores as &$proveedor) {
            $rest = new Rest(Url::get_service('ubicaciones') . 'distrito/buscar_vista/' . $proveedor->{'distrito_id'});
            $proveedor->{'distrito'} = $rest->get(); 
            array_push( $rpta, $proveedor );
        }

        return json_encode($rpta);
    }

    public function action_ver()
    {
        $id = $this->param('id');
        $rest = new Rest(Url::get_service('administracion') . 'proveedor/obtener/' . $id);
        $proveedor = json_decode($rest->get());

        if ($proveedor == ""){
            Response::redirect(Url::base_url() .'error/access/404' , 'refresh');
        }

        $rest = new Rest(Url::get_service('ubicaciones') . 'distrito/buscar_vista/' . $proveedor->{'distrito_id'});
        $nombre_distrito = $rest->get();

        $view = View::forge('layouts/application.tpl');
        $view->set_global('title', 'Administración/Proveedor/Ver');
        $view->set_global('modulo', 'Administracion');
        $view->set_global('titleForm', 'Visualize los Datos del Proveedor');
        $view->set_global('rutaForm', 'Administración / Proveedor / Ver');
        $view->set_global('csss', ['bower_components/swp-plugins/assets/css/mootools.autocomplete','assets/accesos/proveedor/css/index']);
        $view->set_global('jss', []);
        $view->set_global('proveedor', $proveedor);
        $view->set_global('nombre_distrito', $nombre_distrito);
        $view->set_global('disable', true);
        $view->set_global('partial', 'administracion/proveedor/proveedor.tpl');

        if($proveedor->{'imagen_dni_id'} != null){
            $rest = new Rest(Url::get_service('archivos') . 'archivo/obtener_ruta/' . $proveedor->{'imagen_dni_id'});
            $imgen_dni = json_decode($rest->get());
            $view->set_global('imgen_dni', $imgen_dni);
        }

        if($proveedor->{'imagen_ruc_id'} != null){
            $rest = new Rest(Url::get_service('archivos') . 'archivo/obtener_ruta/' . $proveedor->{'imagen_ruc_id'});
            $imgen_ruc = json_decode($rest->get());
            $view->set_global('imgen_ruc', $imgen_ruc);
        }

        return $view;
    }

    public function action_editar()
    {
        $id = $this->param('id');
        $rest = new Rest(Url::get_service('administracion') . 'proveedor/obtener/' . $id);
        $proveedor = json_decode($rest->get());

        if ($proveedor == ""){
            Response::redirect(Url::base_url() .'error/access/404' , 'refresh');
        }

        $rest = new Rest(Url::get_service('ubicaciones') . 'distrito/buscar_vista/' . $proveedor->{'distrito_id'});
        $nombre_distrito = $rest->get();

        $view = View::forge('layouts/application.tpl');
        $view->set_global('title', 'Administración/Proveedor/Editar');
        $view->set_global('modulo', 'Administracion');
        $view->set_global('titleForm', 'Ingrese los Datos del Proveedor a Editar');
        $view->set_global('rutaForm', 'Administración / Proveedor / Editar');
        $view->set_global('csss', ['bower_components/swp-plugins/assets/css/mootools.autocomplete','assets/accesos/proveedor/css/index']);
        $view->set_global('jss', ['bower_components/swp-plugins/assets/js/mootools.chain', 'bower_components/swp-plugins/assets/js/mootools.dao', 'bower_components/swp-plugins/assets/js/mootools.autocomplete','bower_components/swp-plugins/assets/js/jquery.upload','assets/administracion/proveedor/js/proveedor']);
        $view->set_global('proveedor', $proveedor);
        $view->set_global('nombre_distrito', $nombre_distrito);
        $view->set_global('disable', false);
        $view->set_global('partial', 'administracion/proveedor/proveedor.tpl');

        if($proveedor->{'imagen_dni_id'} != null){
            $rest = new Rest(Url::get_service('archivos') . 'archivo/obtener_ruta/' . $proveedor->{'imagen_dni_id'});
            $imgen_dni = json_decode($rest->get());
            $view->set_global('imgen_dni', $imgen_dni);
        }

        if($proveedor->{'imagen_ruc_id'} != null){
            $rest = new Rest(Url::get_service('archivos') . 'archivo/obtener_ruta/' . $proveedor->{'imagen_ruc_id'});
            $imgen_ruc = json_decode($rest->get());
            $view->set_global('imgen_ruc', $imgen_ruc);
        }

        return $view;
    }

    public function action_guardar()
    {
        $data = Input::post('data'); 
        $rest = new Rest(Url::get_service('administracion') . 'proveedor/guardar?data=' . $data);
        return $rest->post();
    }
}

?>