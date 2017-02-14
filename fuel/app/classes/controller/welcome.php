<?php

use \Model\Welcome;

class Controller_Welcome extends Controller
{
	public function action_index()
	{
		$rest = new Rest('http://localhost:5001/item/listar/2');
		$rest->get();
		echo $rest->get_rpta();
		echo Url::base_url();
		return Response::forge(View::forge('welcome/index'));
	}

	public function action_hello()
	{
		return Response::forge(Presenter::forge('welcome/hello'));
	}

	public function action_blank()
	{
		$results = Welcome::get_results();
		var_dump($results);

		$usuarios = Welcome::listar_usuarios();
		var_dump($usuarios);

		exit();

		$view = View::forge('layouts/home.tpl');
       $view->set_global('title', 'Home');
       $view->set_global('modulo', 'Accesos');
       $view->set_global('csss', ['assets/login/css/index']);
       $view->set_global('partial', 'home/index.tpl');

        $response = new Response($view, 404); //, $headers);

        return $response;
	}

	public function action_test()
	{
		$rest = new Rest('http://localhost:5001/item/listar/2');
		$rest->get();

		return $rest->get_rpta();
	}

	public function action_smarty_login()
	{
		$view = View::forge('login/index.tpl');
        $view->title = 'テスト！';
        $view->username = '太郎';
        return $view;
	}

	public function action_home()
	{
		 $view = View::forge('layouts/home/layout');
		 $view->set_global('title', 'Home');
		 $view->set_global('modulo', 'Accesos');
		 $view->set_global('array_js', ['swp/js/mootools.dao', 'swp/js/mootools.form', 'swp/js/mootools.observer', 'swp/js/mootools.grid', 'swp/js/mootools.chain', 'assets/accesos/menu/js/index']);
		 $view->set_global('array_css', ['swp/css/mootools.grid']);
        $view->header = View::forge('layouts/home/header');
        $view->content = View::forge('welcome/home');
        $view->footer = View::forge('layouts/home/footer');

        return $view;
	}

	public function action_listar()
	{
		$rest = new Rest(Url::get_service('accesos') . 'modulo/listar');
		$rest->get();

		return $rest->get_rpta();
	}

	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
