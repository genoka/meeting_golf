<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_model extends CI_Model {
    
    var  $id;
	var  $user_login;
	var  $user_pass;
	var  $user_nicename;
	var  $user_email;
	var  $user_phone;
	var  $user_url;
	var  $user_registered;
	var  $user_activation_key;
	var  $user_status;
	var  $display_name;
	
	var $CI;

	function __construct()
    {
        parent::__construct();
        $CI =& get_instance();
    }

     /**
	 * insert values into table membre
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
    function insert_entry()
    {
        if(!empty($_POST))
        {
	        $this->id = '';
	        $this->user_login   = $_POST['user_nicename']; // please read the below note
	        $this->user_pass = $this->CI->encrypt->encode($_POST['user_pass']);
	        $this->user_nicename = $_POST['nicename'];
	        $this->user_email = $_POST['user_email'];
	        $this->user_phone = $_POST['user_phone'];
	        $this->user_url = $_POST['website'];
	        $this->user_registered = date('YYYY-mm-dd h:i:s');
	        $this->user_activation_key = $_POST['activation'];
	        $this->user_status = 1 ;
	        $this->display_name = $_POST['display_name'];

	        $this->db->insert('membre', $this);

	        return true;
        }else{
        	return false;
        }
            
    }

    /**
	 * test if user_email exist and return user_login
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
    function select_user_email_entry($user_email='')
    {
        $this->db->select('*');
        $this->db->where('user_status', 1);
		$query = $this->db->get('membre');

		foreach ($query->result() as $row) {
			if($row->user_email==$user_email)
			{
			   return $row->user_login;
			   exit();
			}
		  }

		return false;
    }
    /**
	 * test if user_login exist and return them
	 *
	 * @access	public
	 * @param	string
	 * @return	string
	 */
    function select_user_login_entry($user_login='')
    {
        $this->db->select('*');
        $this->db->where('user_status', '1'); 
		$query = $this->db->get('membre');
		foreach ($query->result() as $row) {
			if($row->user_login==$user_login)
			{
			   return $row->user_login;
			   exit();
			}
		}
		return null;
    }

    /**
	 * test if user_pass exist
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
    function select_user_pass_user_email_entry($user_pass='',$user_login='')
    {
        $this->db->select('user_pass');
        $this->db->where('user_email', $user_login); 
		$query = $this->db->get('membre');

		foreach ($query->result() as $row) {
			if($row->user_pass==$user_pass)
			{
			   return true;
			   exit();
			}
		  }

		return false;
    }
    /**
	 * test if user_pass exist
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
    function select_user_pass_user_login_entry($user_pass='',$user_login='')
    {
        $this->db->select('user_pass');
        $this->db->where('user_login', $user_login); 
		$query = $this->db->get('membre');

		foreach ($query->result() as $row) {
			if($row->user_pass==$user_pass)
			{
			   return true;
			   exit();
			}
		  }

		return false;
    }
    /**
	 * get profil id if user_login is user_email
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
    function select_profil_user_email_entry($user_login='')
    {
        $this->db->select('*');
        $this->db->where('user_email', $user_login); 
		$query = $this->db->get('membre');
		foreach ($query->result() as $row) {
			if($row->user_email==$user_login)
			{
			   return $row->id_profil;
			   exit();
			}
		}
		return false;
    }
    /**
	 * get profil id if user_login si not user_email
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
    function select_profil_user_login_entry($user_login='')
    {
        $this->db->select('*');
        $this->db->where('user_login', $user_login); 
		$query = $this->db->get('membre');
		foreach ($query->result() as $row) {
			if($row->user_login==$user_login)
			{
			   return $row->id_profil;
			   exit();
			}
		}
		return false;
    }
    /**
	 * get user_pass value
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
    function select_user_pass_entry($user_email='')
    {
        $this->db->select('*');
        $this->db->where('user_email', $user_email); 
		$query = $this->db->get('membre');

		foreach ($query->result() as $row) {
			if($row->user_email==$user_email)
			{
			   return $row->user_pass;
			   exit();
			}
		  }

		return false;
    }
     /**
	 * get id value
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
    function select_id_user_login_entry($user_login='')
    {
        $this->db->select('*');
        $this->db->where('user_login', $user_login); 
		$query = $this->db->get('membre');
		foreach ($query->result() as $row) {
			if($row->user_login==$user_login)
			{
			   return $row->id;
			   exit();
			}
		}
		return false;
    }
    /**
	 * get id value
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
    function select_id_user_email_entry($user_email='')
    {
        $this->db->select('*');
        $this->db->where('user_email', $user_email); 
		$query = $this->db->get('membre');
		foreach ($query->result() as $row) {
			if($row->user_email==$user_email)
			{
			   return $row->id;
			   exit();
			}
		}
		return false;
    }
    /**
	 * met à jour le user_activation_key de l'membre sur la base de données
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
    function mise_a_jour_user_activation_key($user_activation_key,$user_email)
    {
        $data = array(
               'user_activation_key' => $user_activation_key
            );
		$this->db->where('user_email', $user_email);
		$this->db->update('membre', $data);
		return true;
    }
    /**
	 * verifie le user_activation_key de l'membre
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
    function verification_user_activation_key($user_activation_key,$user_email)
	   {
	   		$this->db->select('*');
	   		 $this->db->where('user_activation_key', $user_activation_key);
	   		 $this->db->where('user_email', $user_email);
			$query = $this->db->get('membre');
			if ($query->num_rows() > 0)
				   return true;
			else return false;
	   }
	 /**
	 * met à jour l'etat du compte de l'membre
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
   function mise_a_jour_user_status($user_email)
	   {
	   		$data = array(
	               'user_status' => '1'
	            );
			$this->db->where('user_email', $user_email);
			$this->db->update('membre', $data);
			return true;
	   }
	 /**
	 * recuperation du mot de passe de l'membre
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
   function recuperer_user_pass($user_email)
	   {
			return true;
	   }
	/**
	 * test si l'adresse user_email fourni par le client exist
	 *
	 * @access	public
	 * @param	string
	 * @return	int
	 */
   function user_email_exist($user_email)
	   {
			$this->db->select('*');
	   		 $this->db->where('user_email', $user_email);
			$query = $this->db->get('membre');
			if ($query->num_rows() > 0)
				   return 1;
			else 
				return 0;
	   }
	    /**
	 * test si le user_login ou username fourni par le client exist
	 *
	 * @access	public
	 * @param	string
	 * @return	int
	 */
   function user_login_exist($user_login)
	   {
			$this->db->select('*');
	   		 $this->db->where('user_login', $user_login);
			$query = $this->db->get('membre');
			if ($query->num_rows() > 0)
				   return 1;
			else 
				return 0;
	   }
	/**
	 * update connecte
	 *
	 * @access	public
	 * @param	string
	 * @return	void
	 */
   function update_connecte($user_login)
	   {
			$data=array('connecte'=>'1');
	   		$this->db->where('user_login', $user_login);
	   		$this->db->update('membre',$data);
	   }
  /**
	 * update connecte
	 *
	 * @access	public
	 * @param	string
	 * @return	void
	 */
   function update_deconnecte($ip)
	   {
			$data=array('connecte'=>'0');
	   		$this->db->where('ip_address', $ip);
	   		$this->db->update('membre',$data);
	   }
	   /**
	 * update connecte
	 *
	 * @access	public
	 * @param	string
	 * @return	void
	 */
   function update_session_deconnecte($ip)
	   {
			$data=array('ip_address'=>'');
	   		$this->db->where('ip_address', $ip);
	   		$this->db->update('membre',$data);
	   }
	 /**
	 * set user session
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	void
	 */
	 function update_session_user_login($session='',$user_login='')
	   {
			$data=array('session'=>$session);
	   		$this->db->where('user_login', $user_login);
	   		$this->db->update('membre',$data);
	   }
	 /**
	 * set user session
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	void
	 */
	 function update_session_user_email($session='',$user_email='')
	   {
			$data=array('session'=>$session);
	   		$this->db->where('user_email', $user_email);
	   		$this->db->update('membre',$data);
	   }
	/**
	 * get session value
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
    function select_session_user_login_entry($session='')
    {
        $this->db->select('*');
        $this->db->where('session', $session); 
		$query = $this->db->get('membre');
		foreach ($query->result() as $row) {
			if($row->session==$session)
			{
			   return $row->user_login;
			   exit();
			}
		}
		return false;
    }
   /**
	 * get session value
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
    function select_session_user_email_entry($session='')
    {
        $this->db->select('*');
        $this->db->where('session', $session); 
		$query = $this->db->get('membre');
		foreach ($query->result() as $row) {
			if($row->session==$session)
			{
			   return $row->user_email;
			   exit();
			}
		}
		return false;
    }
     /**
	 * get user_email value
	 *
	 * @access	public
	 * @param	int
	 * @return	string
	 */
    function select_user_email_value($id=0)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
         $this->db->where('user_status', '1');  
		$query = $this->db->get('membre');
		foreach ($query->result() as $row) {
				if($query->num_rows > 0)
			   return $row->user_email;
			   exit();
		}
    }
  /**
	 * set user ip
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	void
	 */
	 function update_ip_user_login($ip='',$user_login='')
	   {
			$data=array('ip_address'=>$ip);
	   		$this->db->where('user_login', $user_login);
	   		$this->db->update('membre',$data);
	   }
	 /**
	 * set user ip
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	void
	 */
	 function update_ip_user_email($ip='',$user_email='')
	   {
			$data=array('ip_address'=>$ip);
	   		$this->db->where('user_email', $user_email);
	   		$this->db->update('membre',$data);
	   }
	/**
	 * get ip value
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
    function select_ip_user_login_entry($ip='')
    {
        $this->db->select('*');
        $this->db->where('ip_address', $ip); 
		$query = $this->db->get('membre');
		foreach ($query->result() as $row) {
			   return $row->user_login;
			   exit();
		}
		return false;
    }
   /**
	 * get ip value
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
    function select_ip_profil_entry($ip='')
    {
        $this->db->select('*');
        $this->db->where('ip_address', $ip); 
		$query = $this->db->get('membre');
		foreach ($query->result() as $row) {
			   return $row->id_profil;
			   exit();
		}
		return false;
    }
}

?>