<?php

class Controller_Accesos_Item extends Controller
{
    public function before()
    {
        if (Session::get('autenticado') != true){
            Response::redirect(Url::base_url() .'login' , 'refresh');
        }
    }

    public function action_listar()
    {
        $subtitulo_id = $this->param('subtitulo_id');
        $rest = new Rest(Url::get_service('accesos') . 'item/listar/' . $subtitulo_id);
        
        return $rest->get();
    }

    public function action_guardar()
    {
        $data = Input::post('data'); 
        $rest = new Rest(Url::get_service('accesos') . 'item/guardar?data=' . $data);

        return $rest->post();
    }
}

?>