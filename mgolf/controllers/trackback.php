<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class test_unit extends CI_Controller {

   public function trackback()
      {

      	$this->load->library('trackback');
		$this->load->database();

		if ($this->uri->segment(3) == FALSE)
		{
		    $this->trackback->send_error('Unable to determine the entry ID');
		}

		if ( ! $this->trackback->receive())
		{
		    $this->trackback->send_error('The Trackback did not contain valid data');
		}

		$data = array(
		    'tb_id'      => '',
		    'entry_id'   => $this->uri->segment(3),
		    'url'        => $this->trackback->data('url'),
		    'title'      => $this->trackback->data('title'),
		    'excerpt'    => $this->trackback->data('excerpt'),
		    'blog_name'  => $this->trackback->data('blog_name'),
		    'tb_date'    => time(),
		    'ip_address' => $this->input->ip_address()
		);

		$sql = $this->db->insert_string('trackbacks', $data);
		$this->db->query($sql);

		$this->trackback->send_success();
      }


}