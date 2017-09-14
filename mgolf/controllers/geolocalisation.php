<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geolocalisation extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//variables et constantes
		$data['link']=true;
		//codes
						/*$this->golfgmap->GoogleMapAPI($map_id = 'map', $app_id = 'MyMapApp');
						$this->golfgmap->enableMapDisplay();
						$this->golfgmap->disableMapDisplay();
						$this->golfgmap->setDSN($dsn);
						$this->golfgmap->setZoomLevel($level);
						$this->golfgmap->enableMapControls();
						$this->golfgmap->disableMapControls;
						$this->golfgmap->printHeaderJS();
						getPolylineJS();
						getAddMarkersJS($map_id = "", $pano= false) ;
						getAddDirectionsJS();
						getCreateMarkerJS();
						printSidebar();
						getCache($address);
						putCache($address, $lon, $lat);
						geoGetCoordsFull($address,$depth=0);
						getPolygonJS() ;*/
		$page=array(
			'map' => $this->golfgmap->getMap(),
			'mapjs' => $this->golfgmap->getMapJS()
			);
		//views
		$this->load->view('header',$data);
		$this->load->view('links');
		$this->load->view('pages/geolocalisation',$page);
		$this->load->view('footer');
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
	public function add()
	{
		$data['link']=true;
		$this->load->view('header',$data);
		$this->load->view('links');
		$this->load->view('pages/geolocalisation');
		$this->load->view('footer');
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
	public function search()
	{
		$data['link']=true;
		$this->load->view('header',$data);
		$this->load->view('links');
		$this->load->view('pages/geolocalisation');
		$this->load->view('footer');
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
	public function locate()
	{
		//variables et constantes
		$data['link']=true;
		//codes
		$page=array(
			'map' => $this->golfgmap->printMap(),
			);
		//views
		$this->glftools->load_views('pages/geolocalisation',$page);
	}
	
}
