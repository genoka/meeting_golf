<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message_model extends CI_Model {
    var  $id;
    var  $numero;
    var  $date_debut;
    var  $date_fin;
    var  $ouvert;
    var  $cloture;
    var  $titre;
    var  $description;
    var  $contacts;
    var  $active;
    var  $id_utilisateur;
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
    function __construct()
    {
        parent::__construct();
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
    function  insert_message_entry()
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
    function  update_message_entry()
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
    function  delete_message_entry()
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
     function select_all_entry($id)
    {
        $this->db->select('*');
        $query = $this->db->get('message');
        return $query;
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
    function select_all_id($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id); 
        $query = $this->db->get('message');
        return $query;
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
     function message_non_lus($id) {
            $this->db->where('id_utilisateur', $id);
            $this->db->where('lu',FALSE);
            $i=0;
         $query = $this->db->get('message');
        foreach ($query->result_array() as $row)
            {
            $i++;           
        }
            return $i;
        //$this->db->count_all("message");
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
     function message_lus($id) {
            $this->db->where('id_utilisateur', $id);
            $this->db->where('lu',TRUE);
            $i=0;
         $query = $this->db->get('message');
        foreach ($query->result_array() as $row)
            {
            $i++;           
        }
            return $i;
 
        //return $this->db->count_all("message");
    }

}
?>