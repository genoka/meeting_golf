<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Project:     GoogleMapAPI V3: a PHP library inteface to the Google Map API v3
 * File:        GoogleMapV3.php
 * 
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * ORIGINAL INFO
 * link http://www.phpinsider.com/php/code/GoogleMapAPI/
 * copyright 2005 New Digital Group, Inc.
 * author Monte Ohrt <monte at ohrt dot com>
 * package GoogleMapAPI
 * version 2.5
 * 
 * REVISION NOTIFICATION
 * NOTE: This is a modified version of the original listed above.  This version
 * maintains all original GNU software licenses.
 */
/**
 * @link http://code.google.com/p/php-google-map-api/
 * @copyright 2010-2012 Brad wedell
 * @author Brad Wedell
 * @package GoogleMapAPI (version 3)
 * @version 3.0beta
*/

class Member {

        /**
         * Ci instance
         *
         * @var string
         */
		protected  $CI;
        protected  $source;
        public  $list;
        public  $user ;
        public  $password;
        public  $url;

        function __construct()
        {
            $url=array(
                'gmail' => 'http://www.gmail.com/login',
                'facebook' => 'http://fr-fr.facebook.com',
                'twitter' => 'http://www.twitter.com',
                'plus' => 'http://plus.google.com',
                'linkedin' =>'http://www.linkedin.com',
                'viadeo' =>'http://www.viadeo.com'
                );
        }

        /**
         *  
         *
         * @var 
         */
        public function load_view()
        {
        }

        /**
         *  
         *
         * @var 
         */
        public function signin_from_facebook()
        {
        }

        /**
         *  
         *
         * @var 
         */
        public function signin_from_twitter()
        {
        }

        /**
         *  
         *
         * @var 
         */
         public function signin_from_plus()
        {
        }

        /**
         *  
         *
         * @var 
         */
        public function signup_from_facebook()
        {
        }

        /**
         *  
         *
         * @var 
         */
        public function signup_from_twitter()
        {
        }

        /**
         *  
         *
         * @var 
         */
        public function signup_from_plus()
        {
        }

        /**
         *  
         *
         * @var 
         */
        public function import_contacts_gmail()
        {
        }

        /**
         *  
         *
         * @var 
         */
        public function import_contacts_facebook()
        {
        }

        /**
         *  
         *
         * @var 
         */
        public function import_contacts_twitter()
        {
        }

        /**
         *  
         *
         * @var 
         */
       public function import_contacts_plus()
        {
        }

        /**
         *  
         *
         * @var 
         */
        public function set_login()
        {

        }

        /**
         *  
         *
         * @var 
         */
        public function get_parameters_accounts()
        {

        }

        /**
         *  
         *
         * @var 
         */
        public function set_parameters_accounts()
         {
         	
         }
        // several functions to invites your friends in your espace members
        //and the tchating system

         /**
         *  
         *
         * @var 
         */
        public function lists_friends_from_gmail()
        {
        }

        /**
         *  
         *
         * @var 
         */
        public function lists_friends_from_twitter()
        {
        }

        /**
         *  
         *
         * @var 
         */
        public function lists_friends_from_facebook()
        {
        }

        /**
         *  
         *
         * @var 
         */
        public function lists_friends_from_linkedin()
        {
        }

        /**
         *  
         *
         * @var 
         */
        public function lists_friends_from_viadeo()
        {
        }
}
