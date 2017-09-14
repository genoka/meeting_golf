<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	protected $CI;


	public function index($controller='')
	{
		//$CI =& get_instance();
		//$CI->config->item('base_url');
		$this->glfform->rules_signup();
		$this->glftools->load_views();
	}

	/**
	 * 
	 *
	 * @since 1.0.0
	 *
	 * @param 
	 * @param 
	 * @param 
	 * @return 
	 */
	public function contacts()
	{
		$this->glftools->load_views('pages/contact');
	}

	/**
	 * 
	 *
	 * @since 1.0.0
	 *
	 * @param 
	 * @param 
	 * @param 
	 * @return 
	 */
	public function switch_lang()
	{
		$this->glftools->load_views();
	}

}
