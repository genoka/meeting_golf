<?php

class Formulaire  {
     
     var $CI;
     
     function __contruct()
     {
        
     }

     function rules_signup()
        {
         $this->CI =& get_instance();
         $this->CI->load->library('form_validation');
         $config = array(
        'signup' => array(
                array(
                        'field' => 'user_nicename',
                        'label' => 'Username',
                        'rules' => 'required'
                ),
                 array(
                        'field' => 'user_email',
                        'label' => 'Your Email',
                        'rules' => 'required'
                ),
                 array(
                        'field' => 'phone_number',
                        'label' => 'Phone Number',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'firstname',
                        'label' => 'firstname',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'lastname',
                        'label' => 'lastname',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'user_pass',
                        'label' => 'Mot de passe',
                        'rules' => 'required'
                )
        ),
        'user_email' => array(
                array(
                        'field' => 'user_email',
                        'label' => 'Email Address',
                        'rules' => 'required|valid_email'
                )
        ),
        'user_pass' => array(
                array(
                        'field' => 'Password',
                        'label' => 'Password',
                        'rules' => 'required|min_length[5]|max_length[12]'
                )
        )
);             

                $this->CI->fv->set_rules($config);
                $this->CI->fv->set_rules('user_repass', 'RE-Enter Password', 'required');
        }

        public function username_check($str)
        {
                $this->CI =& get_instance();
                $this->CI->load->library('form_validation');
                if ($str == 'test')
                {
                        $this->CI->fv->set_message('username_check', 'The {field} field can not be the word "test"');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }
        public function username_check_email($str)
        {
               $this->CI =& get_instance();
               $this->CI->load->library('form_validation');
        }
        public function redirect()
        {
                redirect('member-meeting-golf');
        }

         /**
     * extract $_POST
     *
     * @access  public
     * @param   null
     * @return  null
     */
   function extrait()
    {
        extract($_POST);
    }

    /**
     * test if variable is email
     *
     * @access  public
     * @param   string
     * @return  null
     */
   function is_email($mail='')
    {
            if(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $mail))
            {
                return true;
            }else
            {
                return false;
            }

            return false;
    }
    /**
    * crypt password with md5 algorithm
    * @access public
    * @param string
    * @return string 
    */
    function crypt_password($password='')
    {
            return md5($password);
    }
    /**
    * crypt password with md5 algorithm
    * @access public
    * @param string
    * @return string 
    */
    function crypt_password_aes($password='')
    {
            return aes($password);
    }
    /**
    * crypt password with md5 algorithm
    * @access public
    * @param string
    * @return string 
    */
    function crypt_password_des($password='')
    {
            return des($password);
    }
}