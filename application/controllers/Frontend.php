<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->db->select('COUNT(*) as total_count');
        $this->db->from('addtocart');
        $this->total_count = $this->db->get()->row()->total_count;
	}

	public function index()
	{
		$this->db->select('*, product.id as pid,price-(price*dis_price/100) as rate');
		$this->db->from('category');
		$this->db->join('product', 'category.id = product.category', 'right');
		$page_data['product'] = $this->db->get()->result_array();
		$page_data['category'] = $this->db->get('category')->result_array();
		$page_data['offerslider'] = $page_data['offerslider'] = $this->db->join('category', 'offerslider.button = category.id')->get('offerslider')->result_array();

		$page_data['total_count'] = $this->total_count;
		$this->load->view('front/index',$page_data);
	}

	public function productThumbnail($id=false)
	{
		$this->db->select('*, product.id as pid,price-(price*dis_price/100) as rate');
		$this->db->from('category');
		$this->db->join('product', 'category.id = product.category', 'right');
		$this->db->where('product.id',$id);
		$this->db->order_by('product.id', 'desc');
		$page_data['product'] = $this->db->get()->row();
		// $page_data['product_img'] = $this->db->get_where('product',array('id'=>$id))->result_array();
		$page_data['total_count'] = $this->total_count;
		$this->load->view('front/product-thumbnail',$page_data);
	}

	public function wishlist(){
		$this->db->select('*, product.id as pid,price-(price*dis_price/100) as rate');
		$this->db->from('category');
		$this->db->join('product', 'category.id = product.category', 'right');
		$this->db->where('product.whislist','1');
		$this->db->order_by('product.id', 'desc');
		$page_data['product'] = $this->db->get()->result_array();
		$page_data['total_count'] = $this->total_count;

		$this->load->view('front/wishlist',$page_data);

	}

	public function shop($slug=false,$id=false){
		if($id){
			$this->db->select('*, product.id as pid,category.id as cid, price-(price*dis_price/100) as rate');
			$this->db->from('category');
			$this->db->join('product', 'category.id = product.category', 'right');
			$this->db->where('product.category',$id);
			$page_data['product'] = $this->db->get()->result_array();
		}else{
			$this->db->select('*, product.id as pid,category.id as cid, price-(price*dis_price/100) as rate');
			$this->db->from('category');
			$this->db->join('product', 'category.id = product.category', 'right');
			$page_data['product'] = $this->db->get()->result_array();
		}


		$page_data['total_count'] = $this->total_count;
		$this->load->view('front/shop-right-sidebar',$page_data);
	}

	public function cart(){
		$this->db->select('*, product.id as pid,addtocart.id as aid,price-(price*dis_price/100) as rate,(price*dis_price/100) as disPrice');
		$this->db->from('category');
		$this->db->join('product', 'category.id = product.category', 'right');
		$this->db->join('addtocart', 'addtocart.product_id = product.id', 'inner');
		$this->db->order_by('product.id', 'desc');
		$page_data['product'] = $this->db->get()->result_array();

		$page_data['total_count'] = $this->total_count;
		$this->load->view('front/cart',$page_data);
	}

	public function checkout(){
		$this->db->select('*, product.id as pid,price-(price*dis_price/100) as rate  ');
		$this->db->from('category');
		$this->db->join('product', 'category.id = product.category', 'right');
		$this->db->join('addtocart', 'addtocart.product_id = product.id', 'inner');
		$this->db->where('product.whislist','1');
		$this->db->order_by('product.id', 'desc');
		$page_data['product'] = $this->db->get()->result_array();
		$page_data['total_count'] = $this->total_count;
		$this->load->view('front/checkout',$page_data);
	}
}
?>