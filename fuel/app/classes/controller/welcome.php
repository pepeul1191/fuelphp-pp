<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.8
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2016 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Welcome extends Controller
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		$rest = new Rest('http://localhost:5001/item/listar/2');
		$rest->get();
		echo $rest->get_rpta();
		echo Url::base_url();
		return Response::forge(View::forge('welcome/index'));
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
		return Response::forge(Presenter::forge('welcome/hello'));
	}

	public function action_blank()
	{
        $view = View::forge('layouts/blank/layout');
        $view->set_global('title', 'Home');
        $view->header = View::forge('layouts/blank/header');
        $view->content = View::forge('welcome/blank');
        $view->footer = View::forge('layouts/blank/footer');

        return $view;
	}

	public function action_test()
	{
		$rest = new Rest('http://localhost:5001/item/listar/2');
		$rest->get();

		return $rest->get_rpta();
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

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
