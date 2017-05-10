<?php

class Controller_Accesos_Sistema extends Controller
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
        $view->set_global('title', 'Accesos/Sistemas');
        $view->set_global('modulo', 'Accesos');
        $view->set_global('titleForm', 'Gestione los Nombres de los Distintos Sistemas');
        $view->set_global('rutaForm', 'Accesos / Sistema');
        $view->set_global('csss', ['bower_components/swp-plugins/assets/css/mootools.grid', 'assets/accesos/menu/css/index']);
        $view->set_global('jss', ['bower_components/swp-plugins/assets/js/mootools.dao', 'bower_components/swp-plugins/assets/js/mootools.form', 'bower_components/swp-plugins/assets/js/mootools.observer', 'bower_components/swp-plugins/assets/js/mootools.grid', 'bower_components/swp-plugins/assets/js/mootools.chain', 'assets/accesos/sistema/js/index']);
        $view->set_global('partial', 'accesos/sistema/index.tpl');

        return $view;
    }

    public function action_listar()
    {
        $rest = new Rest(Url::get_service('accesos') . 'sistema/listar');
        $rest->get();

        return $rest->get_rpta();
    }

    public function action_guardar()
    {
        $data = Input::post('data');
        //echo Url::get_service('accesos') . 'sistema/guardar?data=' . $data; exit(); 
        $rest = new Rest(Url::get_service('accesos') . 'sistema/guardar?data=' . $data);
        
        return $rest->post();
    }
}

?>