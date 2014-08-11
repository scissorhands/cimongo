<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Utilities
{
  protected 	$ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function get_page_data($content = "template/home", $title = "Home")
	{
		$data["content"] = $content;
		$data["title"] = $title;
		return $data;
	}

	

}

/* End of file utilities.php */
/* Location: ./application/libraries/utilities.php */
