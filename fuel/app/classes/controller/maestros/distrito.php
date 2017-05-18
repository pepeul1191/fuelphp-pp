<?php

class Controller_Maestros_Distrito extends Controller
{
    public function before()
    {
        if (Session::get('autenticado') != true){
            //Response::redirect(Url::base_url() .'login' , 'refresh');
        }
    }

    public function action_listar()
    {
        $provincia_id = $this->param('provincia_id');
        $rest = new Rest(Url::get_service('ubicaciones') . 'distrito/listar/' . $provincia_id);
        
        return $rest->get();
    }

    public function action_guardar()
    {
        $data = Input::post('data'); 
        $rest = new Rest(Url::get_service('ubicaciones') . 'distrito/guardar?data=' . $data);

        return $rest->post();
    }

    public function action_buscar()
    {
        $texto = $this->param('texto');
        $rest = new Rest(Url::get_service('ubicaciones') . 'distrito/buscar?texto=' . $texto);

        return $rest->post();
    }
}

?>