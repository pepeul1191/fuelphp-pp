<?php
class Helper
{
    public static function load_css($array_css)
    {
       $rpta = '';

        foreach ($array_css as &$css) {
            $temp = '<link rel="stylesheet" type="text/css" href="' . Url::statics() . $css . '.css"/>';
            $rpta = $rpta . $temp;
        }

        return $rpta;
    }

    public static function load_js($array_js)
    {
       $rpta = '';

        foreach ($array_js as &$js) {
            $temp = '<script src="' . Url::statics() . $js . '.js" type="text/javascript"></script>';
            $rpta = $rpta . $temp;
        }

        return $rpta;
    }

    public static function menu_modulos($nombre_modulo)
    {
        $rest = new Rest(Url::get_service('accesos') . 'modulo/listar_menu?sistema=' . APP_NAME);
        $rest->get();
        $menus = json_decode($rest->get_rpta());
        $rpta = '';
        /*
        <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Home</a></li>
        */
        foreach ($menus as &$menu) {
            if ($nombre_modulo == $menu->{'nombre'}){
                $rpta = $rpta . '<li class="dropdown active"><a href="'. Url::base_url() . $menu->{'url'} . '" class="dropdown-toggle" data-toggle="dropdown">' . $menu->{'nombre'} . '</a></li>';
            }else{
                $rpta = $rpta . '<li class="dropdown"><a href="'. Url::base_url() . $menu->{'url'} . '" class="dropdown-toggle" data-toggle="dropdown">' . $menu->{'nombre'} . '</a></li>';
            }
        }

        return $rpta;
    }

    public static function menu_submodulos($nombre_modulo)
    {
        $rest = new Rest(Url::get_service('accesos') . 'item/listar/menu/?sistema=' . APP_NAME . '&nombre_modulo=' . $nombre_modulo);
        $rest->get();
        $menus = json_decode($rest->get_rpta());

        $rpta = '<ul class="list-group sidebar-nav-v1" id="sidebar-nav">';

        foreach ($menus as &$menu) {
            $rpta = $rpta . '<li class="list-group-item list-toggle"><span>' . $menu->{'subtitulo'} .'</span>'; //<li class="list-group-item list-toggle active">
                           // <a class="accordion-toggle" href="#collapse-forms" data-toggle="collapse" aria-expanded="true">Forms</a>// $rpta . '<h3>' . $menu->{'subtitulo'} . '</h3>'; 
            $rpta = $rpta . '<ul id="collapse-forms" class="collapse in" aria-expanded="true">';
            foreach ($menu->{'items'} as &$item) {
                $rpta = $rpta . '<li><a href="' . Url::base_url() . $item->{'url'} . '">' . $item->{'item'} . '</a></li>';
            }
            $rpta = $rpta . '</ul>';
        }

        return $rpta . '</ul>';
        //return Url::get_service('accesos') . 'item/listar/menu/?sistema=' . APP_NAME . '&nombre_modulo=' . $nombre_modulo;
    }
}
?>