<?php

class Controller_Administracion_Empresa extends Controller
{
    public function before()
    {
        if (Session::get('autenticado') != true){
            Response::redirect(Url::base_url() .'login' , 'refresh');
        }
    }

    public function action_index()
    {
        $rest = new Rest(Url::get_service('administracion') . 'empresa/' . EMPRESA_ID);
        $empresa = json_decode($rest->get());
        $rest = new Rest(Url::get_service('ubicaciones') . 'distrito/buscar_vista/' . $empresa->{'distrito_id'});
        $nombre_distrito = $rest->get();
        //var_dump($empresa);exit();

        $view = View::forge('layouts/application.tpl');
        $view->set_global('title', 'Administración/Empresa');
        $view->set_global('modulo', 'Administracion');
        $view->set_global('titleForm', 'Gestione La Empresa a la Pertenece el Sistema');
        $view->set_global('rutaForm', 'Administración / Empresa');
        $view->set_global('csss', ['bower_components/swp-plugins/assets/css/mootools.grid', 'bower_components/swp-plugins/assets/css/mootools.autocomplete','assets/accesos/menu/css/index']);
        $view->set_global('jss', ['bower_components/swp-plugins/assets/js/mootools.dao', 'bower_components/swp-plugins/assets/js/mootools.form', 'bower_components/swp-plugins/assets/js/mootools.observer', 'bower_components/swp-plugins/assets/js/mootools.grid', 'bower_components/swp-plugins/assets/js/mootools.chain', 'bower_components/swp-plugins/assets/js/mootools.autocomplete','assets/administracion/empresa/js/index']);
        $view->set_global('empresa', $empresa);
        $view->set_global('nombre_distrito', $nombre_distrito);
        $view->set_global('partial', 'administracion/empresa/index.tpl');

        return $view;
    }

    public function action_guardar()
    {
        $data = Input::post('data'); 
        $rest = new Rest(Url::get_service('administracion') . 'empresa/guardar?data=' . $data);
        return $rest->post();
    }
}

?>