<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller {

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
		$data['link']=true;
		$this->load->view('header',$data);
		$this->load->view('links');
		if ($this->form_validation->run() == FALSE)
              {
                        $this->load->view('body');
              }
                else
              {
                       $this->load->view('body');
              }
		$this->load->view('footer');
	}


}