<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {
	public function index()
	{
		$this->db->select('*, product.id as pid');
		$this->db->from('category');
		$this->db->join('product', 'category.id = product.category', 'right');
		$page_data['product'] = $this->db->get()->result_array();

		$this->load->view('front/index',$page_data);
	}
}
