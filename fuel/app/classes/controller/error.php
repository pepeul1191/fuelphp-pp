<?php

class Controller_Error extends Controller
{
    public function action_index()
    {
        Response::redirect(Url::base_url() . 'error/access/404' , 'refresh');
    }

    public function action_access()
    {
        $id = intval($this->param('id'));

        switch ($id) {
            case 404:
                $error = array('numero' => 404, 'mensaje' => 'Archivo no encontrado', 'descripcion' => 'La página que busca no se encuentra en el servidor', 'icono' => 'fa fa-exclamation-triangle');
                break;
            case 501:
                $error = array("numero" => 501, "mensaje" => 'Página en Contrucción', "descripcion" => 'Lamentamos el incoveniente, estamos trabajando en ello.', "icono" => 'fa fa-code-fork');
                break;
            case 5050:
                $error = array("numero" => 5050, "mensaje" => 'Acceso restringido', "descripcion" => 'No cuenta con los privilegios necesarios.', "icono" => 'fa fa-ban');
                break;
            case 5051:
                $error = array("numero" => 5050, "mensaje" => 'Acceso restringido', "descripcion" => 'Necesita estar logueado.', "icono" => 'fa fa-ban');
                break;
            case 8080:
                $error = array("numero" => 404, "mensaje" => 'Archivo no encontrado', "descripcion" => 'La página que busca no se encuentra en el servidor', "icono" => 'fa fa-exclamation-triangle');
                break;
            default:
                $error = array('numero' => 404, 'mensaje' => 'Archivo no encontrado', 'descripcion' => 'La página que busca no se encuentra en el servidor', 'icono' => 'fa fa-exclamation-triangle');
                break;
        }

        $view = View::forge('layouts/blank.tpl');
        $view->set_global('title', 'Error');
        $view->set_global('error', $error);
        $view->set_global('csss', ['assets/error/css/index']);
        $view->set_global('partial', 'error/index.tpl');

        return $view;
    }
}
?>