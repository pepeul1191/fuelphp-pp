<?php

class Controller_Accesos_Modulo extends Controller
{
    public function before()
    {
        if (Session::get('autenticado') != true){
            Response::redirect(Url::base_url() .'login' , 'refresh');
        }
    }

    public function action_listar()
    {
        $sistema_id = $this->param('sistema_id');
        $rest = new Rest(Url::get_service('accesos') . 'modulo/listar/' . $sistema_id);
        $rest->get();

        return $rest->get_rpta();
    }

    public function action_guardar()
    {
        $data = Input::post('data'); 
        $rest = new Rest(Url::get_service('accesos') . 'modulo/guardar?data=' . $data);
        
        return $rest->post();
    }
}

?>