<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Android_model extends CI_Model {
    
    var  $idkey;
    var  $url;
    var  $keysecureserveur;
  
    function __construct()
    {
        parent::__construct();
    }

    // les fonctions du concept crud
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
    function  insert_entry($state=false)
    {
        return array(
            $query, $state
            );
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
    function  update_entry($state=false)
    {
    	return array(
            $query, $state
            );
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
    function  delete_entry($state=false)
    {
    	return array(
            $query, $state
            );
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
    function  select_entry($state=false)
    {

        return array(
            $query, $state
            );
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
    function  download_secure()
    {
    	
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
    function  set_plateform()
    {
        
    }

}

?>