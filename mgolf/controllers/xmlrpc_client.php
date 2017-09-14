<?php

class Xmlrpc_client extends CI_Controller {

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
        public function index()
        {
                $this->load->helper('url');
                $server_url = site_url('xmlrpc_server');

                $this->load->library('xmlrpc');

                $this->xmlrpc->server($server_url, 80);
                $this->xmlrpc->method('Greetings');

                $request = array('How is it going?');
                $this->xmlrpc->request($request);

                if ( ! $this->xmlrpc->send_request())
                {
                        echo $this->xmlrpc->display_error();
                }
                else
                {
                        echo '<pre>';
                        print_r($this->xmlrpc->display_response());
                        echo '</pre>';
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
        public function Greetings()
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
        public function Send_Request()
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
        public function Session()
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
        public function Send_message()
        {
        }


}
?>