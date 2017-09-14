<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tools {
	

     //fonction encode message

	function encode($msg='',$key='')
	{
		 $encrypt_ch="";

		 if(!$this->load->is_loaded('encrypt'));
			{
				$this->load->library('encrypt');
			}

		  switch ($key) {
		  	case '':
		  		$key='default-value-app';
		  		break;
		  	default:
		  		$key='default-value-app';
		  		break;
		  }

		  $encrypt_ch = $this->encrypt->encode($msg,$key);
		  
		  $new_encrypt_ch = $this->encrypt->encode_from_legacy($msg);
		  
		  return array($encrypt_ch,$new_encrypt_ch);
	}

	//decode

	function decode($msg='',$key='')
	{
		$plain_ch="";

		 if(!$this->load->is_loaded('encrypt'));
			{
				$this->load->library('encrypt');
			}

		  switch ($key) {
		  	case '':
		  		$key='default-value-app';
		  		break;
		  	default:
		  		$key='default-value-app';
		  		break;
		  }

		  $plain_ch = $this->encrypt->decode($msg,$key);
		  
		  return $plain_ch;
	}

    function test_serveur()
     {
     	echo extension_loaded('mcrypt') ? 'Yup, mcrypt est supporte' : 'None, Oups!';
     }


     //serveur xml_rpc
  function xml_rpc_server($server_url='localhost',$port='80')
     {
		if(!$this->load->is_loaded('xmlrpcs'));
			{
				$this->load->library('xmlrpcs');
			}     	
		$this->xmlrpcs->server($server_url,$port);	
     }

  function xml_rpc_server_test($server_url='localhost',$port='80')
     {
		if(!$this->load->is_loaded('xmlrpcs'));
			{
				$this->load->library('xmlrpcs');
			}     	
		$this->xmlrpcs->server($server_url,$port);	
     }

  function transaction($sql1="",$sql2="",$sql3="")
      {
      	$this->db->trans_begin();
		$this->db->query($sql1);
		$this->db->query($sql2);
		$this->db->query($sql3);

		if ($this->db->trans_status() === FALSE)
		{
		        $this->db->trans_rollback();
		}
		else
		{
		        $this->db->trans_commit();
		}
      }

   function table_html()
     	{
     		if(!$this->load->is_loaded('table'))
			{
     			$this->load->library('table');
     	    }
			$this->table->set_heading('Name', 'Color', 'Size');
			$this->table->add_row('Fred', 'Blue', 'Small');
			$this->table->add_row('Mary', 'Red', 'Large');
			$this->table->add_row('John', 'Green', 'Medium');

			echo $this->table->generate();

			$this->table->clear();

			$this->table->set_heading('Name', 'Day', 'Delivery');
			$this->table->add_row('Fred', 'Wednesday', 'Express');
			$this->table->add_row('Mary', 'Monday', 'Air');
			$this->table->add_row('John', 'Saturday', 'Overnight');

			echo $this->table->generate();
     	}

   	function format_string($string)
     	{
     		if(!$this->load->is_loaded('typography'))
			{
     		$this->load->library('typography');
			$this->typography->protect_braced_quotes = TRUE;
     		$ch1 = $this->typography->format_characters($string);
     		$ch2 = $this->typography->nl2br_except_pre($ch1);
     	    }
     	}

  	function url()
     	{
     			$segs = $this->uri->segment_array();

				foreach ($segs as $segment)
				{
				        echo $segment;
				        echo '<br />';
				}
     	}

   	function plateformes()
     	 {
     	 	    $this->load->library('user_agent');

				if ($this->agent->is_browser())
				{
				        $agent = $this->agent->browser().' '.$this->agent->version();
				}
				elseif ($this->agent->is_robot())
				{
				        $agent = $this->agent->robot();
				}
				elseif ($this->agent->is_mobile())
				{
				        $agent = $this->agent->mobile();
				}
				else
				{
				        $agent = 'Unidentified User Agent';
				}

				echo $agent;

				if ($this->agent->accept_charset('utf-8'))
					{
					    echo 'You browser supports UTF-8!';
					}
				echo $this->agent->platform();
				
				if ($this->agent->accept_lang('en'))
					{
					        echo 'You accept English!';
					}
     	 }

  	 function zip_fonctions($name= 'mydata1.txt',$data = 'A Data String!',$path="")
     	 {

			$this->zip->add_data($name, $data);
			$this->zip->read_file($path);
			// Write the zip file to a folder on your server. Name it "my_backup.zip"
			$this->zip->archive('/path/to/directory/my_backup.zip');

			// Download the file to your desktop. Name it "my_backup.zip"
			$this->zip->download('my_backup.zip');
     	 }
   function load_views($one_view='body',$page='')
	   {
		$CI =& get_instance();
		$CI->load->library('session');
		//variables et constantes
		$data['link']=true;
		//views
		$CI->load->view('header',$data);
		$CI->load->view('links');
		$CI->load->view($one_view,$page);
		$CI->load->view('footer');
	    }
}
