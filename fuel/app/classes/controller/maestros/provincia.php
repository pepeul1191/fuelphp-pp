<?php

class Controller_Maestros_Provincia extends Controller
{
    public function before()
    {
        if (Session::get('autenticado') != true){
            Response::redirect(Url::base_url() .'login' , 'refresh');
        }
    }

    public function action_listar()
    {
        $departamento_id = $this->param('departamento_id');
        $rest = new Rest(Url::get_service('ubicaciones') . 'provincia/listar/' . $departamento_id);
        
        return $rest->get();
    }

    public function action_guardar()
    {
        $data = Input::post('data'); 
        $rest = new Rest(Url::get_service('ubicaciones') . 'provincia/guardar?data=' . $data);

        return $rest->post();
    }
}

?>