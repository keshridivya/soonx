<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->db->select('COUNT(*) as total_count');
        $this->db->from('addtocart');
        $this->total_count = $this->db->get()->row()->total_count;
		$this->currency = $this->db->get_where('currency',array('status','1'));
		$this->category = $this->db->get('category')->result_array();
	}

	public function index()
	{
		$this->db->select('*, product.id as pid,price-(price*dis_price/100) as rate');
		$this->db->from('category');
		$this->db->join('product', 'category.id = product.category', 'right');
		$page_data['product'] = $this->db->get()->result_array();
		$page_data['banner'] = $this->db->get_where('banner',array('banner_name'=>'home_banner'))->result_array();
		$page_data['category'] = $this->category;
		$page_data['currency'] = $this->currency;
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
		$page_data['category'] = $this->category;
		$page_data['currency'] = $this->currency;
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
		$page_data['category'] = $this->category;
		$page_data['currency'] = $this->currency;

		$this->load->view('front/wishlist',$page_data);

	}

	public function shop($slug=false,$id=false){
		if($id){
			$this->db->select('*, product.id as pid,category.id as cid, price-(price*dis_price/100) as rate');
			$this->db->from('category');
			$this->db->join('product', 'category.id = product.category', 'right');
			$this->db->where('product.category',$id);
			$page_data['currency'] = $this->currency;
			$page_data['products'] = $this->db->get()->result_array();
		}else if($filterval){
			
		}
		else{
			$this->db->select('*, product.id as pid,category.id as cid, price-(price*dis_price/100) as rate');
			$this->db->from('category');
			$this->db->join('product', 'category.id = product.category', 'right');
			$page_data['products'] = $this->db->get()->result_array();
		}


		$page_data['total_count'] = $this->total_count;
		$page_data['category'] = $this->category;
		$page_data['category_banner'] = $this->db->get_where('banner',array('banner_name'=>'category_banner'))->result_array();
		$this->load->view('front/shop-right-sidebar',$page_data);
	}

	public function cart(){
		$this->db->select('*, product.id as pid,addtocart.id as aid,(price+(cgst_amt+sgst_amt)) as pricegst, price+(cgst_amt+sgst_amt)-(price*(dis_price/100)+(cgst_amt+sgst_amt)) as rate, (price*dis_price/100+(cgst_amt+sgst_amt)) as disPrice');
		$this->db->from('category');
		$this->db->join('product', 'category.id = product.category', 'right');
		$this->db->join('addtocart', 'addtocart.product_id = product.id', 'inner');
		$this->db->order_by('product.id', 'desc');
		$page_data['product'] = $this->db->get()->result_array();
		$page_data['total_count'] = $this->total_count;
		$page_data['category'] = $this->category;
		$page_data['currency'] = $this->currency;
		$this->load->view('front/cart',$page_data);
	}

	public function checkout(){
		$user_id = '123';
		$this->db->select('*,product.id as pid,(price+(cgst_amt+sgst_amt)) as pricegst, price+(cgst_amt+sgst_amt)-(price*(dis_price/100)+(cgst_amt+sgst_amt)) as rate, (price*dis_price/100+(cgst_amt+sgst_amt)) as disPrice');
		$this->db->from('product');
		$this->db->join('addtocart','addtocart.product_id=product.id','inner');
		$this->db->where('addtocart.user_id',$user_id);
		$page_data['cart_item'] = $this->db->get()->result_array();
		$page_data['delivery_address'] = $this->db->get_where('delivery_address',array('user_id'=>'123'))->result_array();
		$page_data['total_count'] = $this->total_count;
		$page_data['category'] = $this->category;
		$page_data['currency'] = $this->currency;
		$this->load->view('front/checkout',$page_data);
	}

	public function shipaddress(){
		if($this->input->post()){
			$aid = $this->input->post('address_id');
			$data = [
				'name' => $this->input->post('name'),
				'emailid' => $this->input->post('emailid'),
				'mobile' => $this->input->post('mobnum'),
				'address' => $this->input->post('address'),
				'pincode' => $this->input->post('pin'),
				'landmark' => $this->input->post('landmark'),
				'user_id' => $this->input->post('userid'),
				'created_on' => date('y-m-d'),
				'status' => '1',
			];
			if($aid == ''){
				if($this->db->insert('delivery_address',$data)){
					redirect('checkout');
				}
				else{
					echo 'error';
				}
			}else{
				$this->db->where('id',$aid);
				$this->db->update('delivery_address',$data);
			}
		}
	}

	public function addressdelete(){
		$id = $this->input->post('row_id');
		$this->db->where('id', $id);
		if ($this->db->delete('delivery_address')) {
			echo 'success';
		} else {
			echo 'error';
		}
	}

	public function applyCoupon() {
		$couponCode = $this->input->post('couponcode');
		// Query the database to check if the coupon code exists
		$this->db->where('couponcode', $couponCode);
		$this->db->where('status','Active');
		$coupon = $this->db->get('coupon')->row();
	
		if ($coupon) {
			// Check if the coupon is not expired
			if (strtotime($coupon->expiry_date) >= time()) {
				// $discountedAmount = $cartTotal * ($coupon->discount / 100);
				$finalAmount = $coupon->amt;
	
				// Update the cart or order with the discounted amount
				$this->session->set_userdata('cart_total', $finalAmount);
	
				// Return a success response with the final amount
				$response = [
					'success' => true,
					'message' => 'Coupon applied successfully',
					'finalAmount' => $finalAmount
				];
			} else {
				// Coupon code is expired
				$response = [
					'success' => false,
					'message' => 'Coupon code has expired'
				];
			}
		} else {
			// Coupon code is not valid
			$response = [
				'success' => false,
				'message' => 'Invalid coupon code'
			];
		}
	
		// Return the response in JSON format
		$this->output
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response));
	}
	
	public function fetchResults() {
			$keyword = $this->input->get('keyword');
	
			// Perform the search logic based on the keyword
			// Query the database or perform any necessary operations
			// Return the search results as JSON
	
			$results = [
				['title' => 'Result 1', 'url' => 'result1_url'],
				['title' => 'Result 2', 'url' => 'result2_url'],
				// Add more results as needed
			];
	
			// Return the search results as JSON
			header('Content-Type: application/json');
			echo json_encode($results);
	}

	public function currencysession(){
		$currencycode = $this->input->post('currencycode');
		$this->db->set('status', '0');
		$this->db->update('currency');
		$data = [
			'status' => '1',
		];
		$this->db->where('currency_name', $currencycode);
		$this->db->update('currency', $data);
	}
	
	//   <li class="col-6 col-sm-6 col-md-4 col-lg-4 item " data-price="<?php
// 	if(isset($_SESSION['USD'])){
// 		echo number_format($arr['price'] * $_SESSION['USD']).'';
// 	}else{//echo $arr['price']; }?


// <span class="price"> <?php
//                                                             if(isset($_SESSION['USD'])){
//                                                                 echo '<i class="'.$_SESSION['icon'].'"></i>'.number_format($arr['price'] * $_SESSION['USD']).'';
//                                                             }else{ <i class="fa fa-inr"></i> <?php echo $arr['price'];
//                                                     <?php } 
	
}
?>
