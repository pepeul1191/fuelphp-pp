<?php

class Controller_Administracion_Sede extends Controller
{
    public function before()
    {
        if (Session::get('autenticado') != true){
            Response::redirect(Url::base_url() .'login' , 'refresh');
        }
    }

    public function action_listar($empresa_id)
    {
        $rest = new Rest(Url::get_service('administracion') . 'sede/listar/' . $empresa_id);
        $sedes = json_decode($rest->get());
        $rpta = [];

        foreach ($sedes as &$sede) {
            $rest = new Rest(Url::get_service('ubicaciones') . 'distrito/buscar_vista/' . $sede->{'distrito_id'});
            $sede->{'distrito'} = $rest->get(); 
            array_push( $rpta, $sede );
        }

        return json_encode($rpta);
    }

    public function action_guardar()
    {
        //var_dump(Input::post('data')); return "XD";
        $data = Input::post('data'); 
        $rest = new Rest(Url::get_service('administracion') . 'sede/guardar?data=' . $data);
        return $rest->post();
    }
}

?>