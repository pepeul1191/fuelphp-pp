<?php

class Controller_Login extends Controller
{
    public function action_index()
    {
        if (Session::get('autenticado') != true){
            $view = View::forge('layouts/blank.tpl');
            $view->set_global('title', 'Login');
            $view->set_global('csss', ['assets/login/css/index']);
            $view->set_global('partial', 'login/index.tpl');

            return $view;
        }else{
            Response::redirect(Url::base_url() , 'refresh');
        }
    }

    public function action_acceder()
    {
        $cipher = new Cipher(); 
        $usuario = Input::post('usuario'); 
        $contrasenia = $cipher->encrypt(Input::post('contrasenia'));
        $rest = new Rest(Url::get_service('accesos') . 'usuario/validar?usuario=' . $usuario . '&contrasenia=' . $contrasenia);
        $rest->post();

        //if ($rest->get_rpta() == 1){
        if (1 == 0){
            Session::set('autenticado', true);
            Session::set('usuario', $usuario);
            Session::set('tiempo', date('m/d/Y h:i:s a', time()));

            Response::redirect(Url::base_url(), 'refresh');
        }else{
            $view = View::forge('layouts/blank.tpl');
            $view->set_global('title', 'Login');
            $view->set_global('mensaje', true);
            $view->set_global('csss', ['assets/login/css/index']);
            $view->set_global('partial', 'login/index.tpl');

            return $view;
        }
    }

    public function action_ver(){
        if (Session::get('autenticado') == true){
            $rpta = 'usuario : ' . Session::get('usuario') . '</br> estado : ' . Session::get('autenticado') . '</br>tiempo : ' . Session::get('tiempo') ;
            return $rpta;
        }else{
            Response::redirect(Url::base_url() , 'refresh');
        }
    }

    public function action_cerrar(){
        Session::destroy();
        Response::redirect(Url::base_url() . 'login', 'refresh');
    }
}
?>