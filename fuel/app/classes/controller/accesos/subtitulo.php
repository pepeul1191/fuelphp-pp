<?php

class Controller_Accesos_Subtitulo extends Controller
{
    public function before()
    {
        if (Session::get('autenticado') != true){
            Response::redirect(Url::base_url() .'login' , 'refresh');
        }
    }

    public function action_listar()
    {
        $modulo_id = $this->param('modulo_id');
        $rest = new Rest(Url::get_service('accesos') . 'subtitulo/listar/' . $modulo_id);

        return $rest->get();
    }

    public function action_guardar()
    {
        $data = Input::post('data'); 
        $rest = new Rest(Url::get_service('accesos') . 'subtitulo/guardar?data=' . $data);
        
        return $rest->post();
    }
}

?>