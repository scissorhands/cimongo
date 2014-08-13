<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("utilities");
	}

	public function index()
	{
		$data = $this->utilities->get_page_data();
		$this->load->view("template/loader", $data);
	}

	public function mongo_print()
	{
		// Configuration
		$dbhost = 'localhost';
		$dbname = 'cimongo';

		// Connect to test database
		echo "Start<br />";
		$m = new MongoClient("mongodb://$dbhost");
		$db = $m->$dbname;

		// Get the users collection
		$c_users = $db->users;

		$users = $c_users->find();
		$myusers = iterator_to_array($users);
		echo "<pre>";
		print_r($myusers);
		echo "</pre>";
	}

	public function mongononongo()
	{
		// Configuration
		$dbhost = 'localhost';
		$dbname = 'cimongo';

		// Connect to test database
		echo "Start<br />";
		$m = new MongoClient("mongodb://$dbhost");
		$db = $m->$dbname;

		// Get the users collection
		$c_users = $db->users;

		// Insert this new document into the users collection
		$user = array(
			'name' => 'Josafat',
			'last_name' => 'Benitez',
			'tags' => array('developer','user')
		);
		$c_users->insert($user);	
		echo "success";
	}

}

/* End of file site.php */
/* Location: ./application/controllers/site.php */