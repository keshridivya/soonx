<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {
	public function index()
	{
		$this->db->select('*, product.id as pid,price-(price*dis_price/100) as rate');
		$this->db->from('category');
		$this->db->join('product', 'category.id = product.category', 'right');
		$page_data['product'] = $this->db->get()->result_array();

		$this->load->view('front/index',$page_data);
	}

	public function productThumbnail($id=false)
	{
		$this->db->select('*, product.id as pid,price-(price*dis_price/100) as rate');
		$this->db->from('category');
		$this->db->join('product', 'category.id = product.category', 'right');
		$this->db->where('product.id',$id);
		$page_data['product'] = $this->db->get()->row();
		// $page_data['product_img'] = $this->db->get_where('product',array('id'=>$id))->result_array();

		$this->load->view('front/product-thumbnail',$page_data);
	}
}
