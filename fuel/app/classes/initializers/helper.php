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
        $rest = new Rest(Url::get_service('accesos') . 'modulo/listar');
        $rest->get();
        $menus = json_decode($rest->get_rpta());
        $rpta = '';

        foreach ($menus as &$menu) {
            if ($nombre_modulo == $menu->{'nombre'}){
                $rpta = $rpta . '<li class="activo"><a href="' . Url::base_url() . $menu->{'url'} . '">' . $menu->{'nombre'} . '</a></li>';
            }else{
                $rpta = $rpta . '<li><a href="' . Url::base_url() . $menu->{'url'} . '">' . $menu->{'nombre'} . '</a></li>';
            }
        }

        return $rpta;
    }

    public static function menu_izquierdo($nombre_modulo)
    {
        $rest = new Rest(Url::get_service('accesos') . 'item/listar/menu/' . $nombre_modulo);
        $rest->get();
        $menus = json_decode($rest->get_rpta());
        $rpta = '';

        foreach ($menus as &$menu) {
            $rpta = $rpta . '<h5>' . $menu->{'subtitulo'} . '</h5>';
            $rpta = $rpta . '<ul>';
            foreach ($menu->{'items'} as &$item) {
                $rpta = $rpta . '<li><a href="' . Url::base_url() . $item->{'url'} . '">' . $item->{'item'} . '</a></li>';
            }
            $rpta = $rpta . '</ul>';
        }

        return $rpta;
    }
}
?>