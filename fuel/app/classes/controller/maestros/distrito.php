<?php

class Controller_Maestros_Distrito extends Controller
{
    public function before()
    {
        if (Session::get('autenticado') != true){
            Response::redirect(Url::base_url() .'login' , 'refresh');
        }
    }

    public function action_listar()
    {
        $provinvia_id = $this->param('provinvia_id');
        $rest = new Rest(Url::get_service('ubicaciones') . 'distrito/listar/' . $provinvia_id);
        
        return $rest->get();
    }

    public function action_guardar()
    {
        $data = Input::post('data'); 
        $rest = new Rest(Url::get_service('ubicaciones') . 'distrito/guardar?data=' . $data);

        return $rest->post();
    }
}

?>