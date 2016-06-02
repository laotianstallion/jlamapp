<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Home extends CI_Controller {

	public function __construct()

	{

		parent::__construct();

		$this->load->helper('url');

	}

	public function index()

	{

		// default view is beauty

		$this->beauty();

	}

	public function beauty()

	{

		$data = array();

		$pictures = $this->_get_pictures('beauty');

		$data['title'] = "beauty";

		$data['pictures'] = $pictures;

		$this->load->view('picture', $data);

	}

	public function lifestyle()

	{

		$data = array();

		$pictures = $this->_get_pictures('lifestyle');

		$data['title'] = "lifestyle";

		$data['pictures'] = $pictures;

		$this->load->view('picture', $data);

	}

  public function bridal()

  {

    $data = array();

    $pictures = $this->_get_pictures('bridal');

    $data['title'] = "bridal";

    $data['pictures'] = $pictures;

    $this->load->view('picture', $data);

  }

	public function celebrity()

	{

		$data = array();

		$pictures = $this->_get_pictures('celebrity');

		$data['title'] = "celebrity";

		$data['pictures'] = $pictures;

		$this->load->view('picture', $data);

	}

	public function fashion()

	{

		$data = array();

		$pictures = $this->_get_pictures('fashion');

		$data['title'] = "fashion";

		$data['pictures'] = $pictures;

		$this->load->view('picture', $data);

	}

	public function services()

	{

		$data = array();

		$data['title'] = "services";

		$this->load->view('services', $data);

	}

	public function contact()

	{

		$data = array();

		$data['title'] = "contact";

		$this->load->library('email');

		$this->load->view('contact', $data);

	}

	public function bio()

	{

		$data = array();

		$data['title'] = "bio";

		$this->load->view('bio', $data);

	}

	private function _get_pictures($type = 'beauty')

	{

		$this->load->helper('file');

		$path = 'img/' . $type . '/';

		$files = get_filenames($path);
		natsort($files);
		$pictures = array();

		foreach($files as $file) {
			$pictures[] = base_url() . $path . $file;

		}

		return $pictures;

	}
	public function sitemap()
	{
		header("Content-Type: text/xml;charset=iso-8859-1");
		$this->load->view('sitemap');
	}

}

