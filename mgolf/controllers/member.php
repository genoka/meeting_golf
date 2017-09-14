<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

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
	public function index()
	{
		$this->glftools->load_views('pages/member');

	}

/**
 * 
 *
 * @since 1.0.0
 *
 * @param  void
 * @return  bool
 */
	public function signin()
	{
        $this->output->enable_profiler(TRUE);
		//form validation
		if ($this->fv->run() == FALSE)
                {
                        $this->glftools->load_views();

              
                }
                else
                {
                      //traitement de l'authentification
                      $this->glftools->load_views('pages/member');

                }
     	}

/**
 * 
 *
 * @since 1.0.0
 *
 * @param  void
 * @return  bool 
 */
	public function signup()
	{
		$this->output->enable_profiler(TRUE);
		$this->glfform->rules_signup();
		if ($this->fv->run() == FALSE)
                {
                        $this->glftools->load_views();
                        return false;
                }
                else
                {
                      //traitement de l'authentification

                	  $this->membre->insert_entry();

                      $this->glftools->load_views('pages/member');

                      return true;
                }
          

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
	public function validate_signup()
	{
		$this->glftools->load_views('pages/member');
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
	public function get_password()
	{
		$this->glftools->load_views('pages/member');
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
	public function find_guest()
	{
		$this->glftools->load_views('pages/member');
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
	public function invite_guest()
	{
		$this->glftools->load_views('pages/member');
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
	public function block_guest()
	{
		$this->glftools->load_views('pages/member');
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
	public function locate_guest()
	{
		$this->glftools->load_views('pages/member');
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
	public function send_ticket_playing_golf()
	{
		$this->glftools->load_views('pages/member');
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
	public function view_ticket_playing_golf()
	{
		$this->glftools->load_views('pages/member');
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
	public function delete_ticket_playing_golf()
	{
		$this->glftools->load_views('pages/member');
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
	public function invite_ticket_playing_golf()
	{
		$this->glftools->load_views('pages/member');
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
	public function facebook_ticket_playing_golf()
	{
		$this->glftools->load_views('pages/member');
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
	public function twitter_ticket_playing_golf()
	{
		$this->glftools->load_views('pages/member');
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
	public function plus_ticket_playing_golf()
	{
		$this->glftools->load_views('pages/member');
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
	public function android_ticket_playing_golf()
	{
		$this->glftools->load_views('pages/member');
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
	public function ios_ticket_playing_golf()
	{
		$this->glftools->load_views('pages/member');
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
	public function contact_informations()
	{
		$this->glftools->load_views('pages/member');
	}
	
}
