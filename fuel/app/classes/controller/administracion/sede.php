<?php

class Controller_Administracion_Sede extends Controller
{
    public function before()
    {
        /*if (Session::get('autenticado') != true){
            Response::redirect(Url::base_url() .'login' , 'refresh');
        }*/
    }

    public function action_index()
    {
        $view = View::forge('layouts/application.tpl');
        $view->set_global('title', 'Administración/Sedes');
        $view->set_global('modulo', 'Administracion');
        $view->set_global('titleForm', 'Gestione La Empresa a la Pertenece el Sistema');
        $view->set_global('rutaForm', 'Administración / Empresa');
        $view->set_global('csss', ['bower_components/swp-plugins/assets/css/mootools.grid', 'bower_components/swp-plugins/assets/css/mootools.autocomplete','assets/accesos/menu/css/index']);
        $view->set_global('jss', ['bower_components/swp-plugins/assets/js/mootools.dao', 'bower_components/swp-plugins/assets/js/mootools.form', 'bower_components/swp-plugins/assets/js/mootools.observer', 'bower_components/swp-plugins/assets/js/mootools.grid', 'bower_components/swp-plugins/assets/js/mootools.chain', 'bower_components/swp-plugins/assets/js/mootools.autocomplete','assets/administracion/sede/js/index']);
        $view->set_global('empresa_id', EMPRESA_ID);
        $view->set_global('partial', 'administracion/sede/index.tpl');

        return $view;
    }

    public function action_listar($empresa_id)
    {
        $rest = new Rest(Url::get_service('administracion') . 'sede/listar/' . $empresa_id);
        $sedes = json_decode($rest->get());
        $rpta = [];

        foreach ($sedes as &$sede) {
            $rest = new Rest(Url::get_service('ubicaciones') . 'distrito/buscar_vista/' . $sede->{'distrito_id'});
            $sede->{'distrito'} = $rest->get(); 
            array_push( $rpta, $sede );
        }

        return json_encode($rpta);
    }

    public function action_guardar()
    {
        $data = Input::post('data'); 
        $rest = new Rest(Url::get_service('administracion') . 'sede/guardar?data=' . $data);
        return $rest->post();
    }
}

?>