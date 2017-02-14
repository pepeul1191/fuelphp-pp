<?php

class Controller_Accesos_Usuario extends Controller
{
    public function before()
    {
        echo "HOLA";
        if (Session::get('autenticado') != true){
            Response::redirect(Url::base_url() .'login' , 'refresh');
        }
    }

    public function action_index()
    {
        $view = View::forge('layouts/application.tpl');
        $view->set_global('title', 'Accesos/Usuarios');
        $view->set_global('modulo', 'Accesos');
        $view->set_global('csss', ['bower_components/swp-plugins/assets/css/mootools.grid']);
        $view->set_global('jss', ['bower_components/swp-plugins/assets/js/mootools.dao', 'bower_components/swp-plugins/assets/js/mootools.form', 'bower_components/swp-plugins/assets/js/mootools.observer', 'bower_components/swp-plugins/assets/js/mootools.grid', 'bower_components/swp-plugins/assets/js/mootools.chain', 'assets/accesos/usuarios/js/index']);
        $view->set_global('partial', 'accesos/usuario/index.tpl');

        return $view;
    }

    public function action_listar()
    {
        $rest = new Rest(Url::get_service('accesos') . 'usuario/listar');
        return $rest->get();
    }

    public function action_listar_accesos()
    {
        $usuario_id = $this->param('usuario_id');
        $rest = new Rest(Url::get_service('accesos') . 'usuario/listar_accesos/' . $usuario_id);
        return $rest->get();
    }

    public function action_ver_accesos()
    {
        $view = View::forge('layouts/modal_small.tpl');
        $view->set_global('titulo_modal', 'Ver Accesos');
        $view->set_global('jss_modal', ['assets/accesos/usuarios/js/accesos']);
        $view->set_global('partial_modal', 'accesos/usuario/accesos.tpl');

        return $view;
    }

    public function action_editar()
    {
        $view = View::forge('layouts/modal_medium.tpl');
        $view->set_global('titulo_modal', 'Editar Usuario');
        $view->set_global('jss_modal', ['assets/accesos/usuarios/js/usuario']);
        $view->set_global('partial_modal', 'accesos/usuario/usuario.tpl');

        return $view;
    }

    public function action_ver_roles_permisos()
    {
        $view = View::forge('layouts/modal_large.tpl');
        $view->set_global('titulo_modal', 'Gestione los Roles y Permisos del Usuario');
        $view->set_global('jss_modal', ['assets/accesos/usuarios/js/roles_permisos']);
        $view->set_global('partial_modal', 'accesos/usuario/roles_permisos.tpl');

        return $view;
    }

    public function action_listar_permisos()
    {
        $usuario_id = $this->param('usuario_id');
        $rest = new Rest(Url::get_service('accesos') . 'usuario/listar_permisos/' . $usuario_id);
        return $rest->get();
    }

    public function action_listar_roles()
    {
        $usuario_id = $this->param('usuario_id');
        $rest = new Rest(Url::get_service('accesos') . 'usuario/listar_roles/' . $usuario_id);
        return $rest->get();
    }

    public function action_asociar_permisos()
    {
        $data = Input::post('data'); 
        $rest = new Rest(Url::get_service('accesos') . 'usuario/asociar_permisos?data=' . $data);
        return $rest->post();
    }

    public function action_asociar_roles()
    {
        $data = Input::post('data'); 
        $rest = new Rest(Url::get_service('accesos') . 'usuario/asociar_roles?data=' . $data);
        return $rest->post();
    }
}

?>