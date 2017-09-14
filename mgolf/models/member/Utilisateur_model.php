<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Utilisateur_model extends CI_Model {
    var  $id;
	var  $login;
	var  $password;
	var  $active;
	var  $email;
	var  $connecte;
	var  $session;
	var  $id_profil;

    function __construct()
    {
        parent::__construct();
    }

     /**
	 * insert values into table utilisateur in database senegaljobss
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
    function insert_entry($username,$password,$email,$profil)
    {
        if(!empty($username) & !empty($password) & !empty($email) & !empty($profil) )
        {
	        $this->id = '';
	        $this->login   = $username; // please read the below note
	        $this->password = $password;
	        $this->active = '0';
	        $this->email = $email;
	        $this->connecte = '0';
	        $this->session = '';
	        $this->id_profil = $profil;

	        $this->db->insert('utilisateur', $this);

	        return true;
        }
            return false;
    }

    /**
	 * test if email exist and return login
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
    function select_email_entry($email='')
    {
        $this->db->select('*');
        $this->db->where('active', '1');
		$query = $this->db->get('utilisateur');

		foreach ($query->result() as $row) {
			if($row->email==$email)
			{
			   return $row->login;
			   exit();
			}
		  }

		return false;
    }
    /**
	 * test if login exist and return them
	 *
	 * @access	public
	 * @param	string
	 * @return	string
	 */
    function select_login_entry($login='')
    {
        $this->db->select('*');
        $this->db->where('active', '1'); 
		$query = $this->db->get('utilisateur');
		foreach ($query->result() as $row) {
			if($row->login==$login)
			{
			   return $row->login;
			   exit();
			}
		}
		return null;
    }

    /**
	 * test if password exist
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
    function select_password_email_entry($password='',$login='')
    {
        $this->db->select('password');
        $this->db->where('email', $login); 
		$query = $this->db->get('utilisateur');

		foreach ($query->result() as $row) {
			if($row->password==$password)
			{
			   return true;
			   exit();
			}
		  }

		return false;
    }
    /**
	 * test if password exist
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
    function select_password_login_entry($password='',$login='')
    {
        $this->db->select('password');
        $this->db->where('login', $login); 
		$query = $this->db->get('utilisateur');

		foreach ($query->result() as $row) {
			if($row->password==$password)
			{
			   return true;
			   exit();
			}
		  }

		return false;
    }
    /**
	 * get profil id if login is email
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
    function select_profil_email_entry($login='')
    {
        $this->db->select('*');
        $this->db->where('email', $login); 
		$query = $this->db->get('utilisateur');
		foreach ($query->result() as $row) {
			if($row->email==$login)
			{
			   return $row->id_profil;
			   exit();
			}
		}
		return false;
    }
    /**
	 * get profil id if login si not email
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
    function select_profil_login_entry($login='')
    {
        $this->db->select('*');
        $this->db->where('login', $login); 
		$query = $this->db->get('utilisateur');
		foreach ($query->result() as $row) {
			if($row->login==$login)
			{
			   return $row->id_profil;
			   exit();
			}
		}
		return false;
    }
    /**
	 * get password value
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
    function select_password_entry($email='')
    {
        $this->db->select('*');
        $this->db->where('email', $email); 
		$query = $this->db->get('utilisateur');

		foreach ($query->result() as $row) {
			if($row->email==$email)
			{
			   return $row->password;
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
    function select_id_login_entry($login='')
    {
        $this->db->select('*');
        $this->db->where('login', $login); 
		$query = $this->db->get('utilisateur');
		foreach ($query->result() as $row) {
			if($row->login==$login)
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
    function select_id_email_entry($email='')
    {
        $this->db->select('*');
        $this->db->where('email', $email); 
		$query = $this->db->get('utilisateur');
		foreach ($query->result() as $row) {
			if($row->email==$email)
			{
			   return $row->id;
			   exit();
			}
		}
		return false;
    }
    /**
	 * met à jour le code de l'utilisateur sur la base de données
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
    function mise_a_jour_code($code,$email)
    {
        $data = array(
               'code' => $code
            );
		$this->db->where('email', $email);
		$this->db->update('utilisateur', $data);
		return true;
    }
    /**
	 * verifie le code de l'utilisateur
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
    function verification_code($code,$email)
	   {
	   		$this->db->select('*');
	   		 $this->db->where('code', $code);
	   		 $this->db->where('email', $email);
			$query = $this->db->get('utilisateur');
			if ($query->num_rows() > 0)
				   return true;
			else return false;
	   }
	 /**
	 * met à jour l'etat du compte de l'utilisateur
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
   function mise_a_jour_active($email)
	   {
	   		$data = array(
	               'active' => '1'
	            );
			$this->db->where('email', $email);
			$this->db->update('utilisateur', $data);
			return true;
	   }
	 /**
	 * recuperation du mot de passe de l'utilisateur
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
   function recuperer_password($email)
	   {
			return true;
	   }
	/**
	 * test si l'adresse email fourni par le client exist
	 *
	 * @access	public
	 * @param	string
	 * @return	int
	 */
   function email_exist($email)
	   {
			$this->db->select('*');
	   		 $this->db->where('email', $email);
			$query = $this->db->get('utilisateur');
			if ($query->num_rows() > 0)
				   return 1;
			else 
				return 0;
	   }
	    /**
	 * test si le login ou username fourni par le client exist
	 *
	 * @access	public
	 * @param	string
	 * @return	int
	 */
   function login_exist($login)
	   {
			$this->db->select('*');
	   		 $this->db->where('login', $login);
			$query = $this->db->get('utilisateur');
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
   function update_connecte($login)
	   {
			$data=array('connecte'=>'1');
	   		$this->db->where('login', $login);
	   		$this->db->update('utilisateur',$data);
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
	   		$this->db->update('utilisateur',$data);
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
	   		$this->db->update('utilisateur',$data);
	   }
	 /**
	 * set user session
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	void
	 */
	 function update_session_login($session='',$login='')
	   {
			$data=array('session'=>$session);
	   		$this->db->where('login', $login);
	   		$this->db->update('utilisateur',$data);
	   }
	 /**
	 * set user session
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	void
	 */
	 function update_session_email($session='',$email='')
	   {
			$data=array('session'=>$session);
	   		$this->db->where('email', $email);
	   		$this->db->update('utilisateur',$data);
	   }
	/**
	 * get session value
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
    function select_session_login_entry($session='')
    {
        $this->db->select('*');
        $this->db->where('session', $session); 
		$query = $this->db->get('utilisateur');
		foreach ($query->result() as $row) {
			if($row->session==$session)
			{
			   return $row->login;
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
    function select_session_email_entry($session='')
    {
        $this->db->select('*');
        $this->db->where('session', $session); 
		$query = $this->db->get('utilisateur');
		foreach ($query->result() as $row) {
			if($row->session==$session)
			{
			   return $row->email;
			   exit();
			}
		}
		return false;
    }
     /**
	 * get email value
	 *
	 * @access	public
	 * @param	int
	 * @return	string
	 */
    function select_email_value($id=0)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
         $this->db->where('active', '1');  
		$query = $this->db->get('utilisateur');
		foreach ($query->result() as $row) {
				if($query->num_rows > 0)
			   return $row->email;
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
	 function update_ip_login($ip='',$login='')
	   {
			$data=array('ip_address'=>$ip);
	   		$this->db->where('login', $login);
	   		$this->db->update('utilisateur',$data);
	   }
	 /**
	 * set user ip
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	void
	 */
	 function update_ip_email($ip='',$email='')
	   {
			$data=array('ip_address'=>$ip);
	   		$this->db->where('email', $email);
	   		$this->db->update('utilisateur',$data);
	   }
	/**
	 * get ip value
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
    function select_ip_login_entry($ip='')
    {
        $this->db->select('*');
        $this->db->where('ip_address', $ip); 
		$query = $this->db->get('utilisateur');
		foreach ($query->result() as $row) {
			   return $row->login;
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
		$query = $this->db->get('utilisateur');
		foreach ($query->result() as $row) {
			   return $row->id_profil;
			   exit();
		}
		return false;
    }
}

?>