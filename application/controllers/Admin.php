<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->library(array('form_validation','upload'));
		$this->load->helper('cookie');
	}

	public function index()
	{
		$page_data['title'] = 'Login';
		$this->load->view('admin/index',$page_data);
	}

	public function process_login() {
		// Get form input values
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$remember_me = $this->input->post('remember_me');
	
		// Validate login credentials
		if ($this->validate_login($username, $password)) {
		  // Login successful
		  $user_data = array('username' => $username);
		  $this->session->set_userdata($user_data);
	
		  // Set remember me cookie if checkbox is checked
		  if ($remember_me) {
			$remember_token = $this->generate_remember_token();
			$this->update_remember_token($username, $remember_token);
			$remember_me_cookie = array(
			  'name' => 'remember_me',
			  'value' => $remember_token,
			  'expire' => 86400 * 30, // 30 days
			);
			$this->input->set_cookie($remember_me_cookie);
		  }
		  if($this->session->userdata['username']){
		  redirect('admin/dashboard'); // Redirect to dashboard or any other page after successful login

		  }
	
		} else {
		  $page_data['message'] = 'Username or Password is not correct';
		  $this->load->view('admin/index',$page_data);
		}
	}
	
	private function validate_login($username, $password) {
		// Hash the password
		$hashed_password = sha1($password);
	
		// Check if the user exists in the database
		$sql = "SELECT * FROM admin_login WHERE name = '$username' OR email = '$username 'AND password = '$hashed_password' AND role='admin'";
		$query = $this->db->query($sql, array($username, $hashed_password));
	
		if ($query->num_rows() === 1) {
		  return true; // Login is successful
		} else {
		  return false; // Login failed
		}
	}
	
	private function generate_remember_token() {
		return bin2hex(random_bytes(32));
	}
	
	private function update_remember_token($username, $remember_token) {
		$this->load->database();
		$data = array(
		  'remember_token' => $remember_token
		);
		$this->db->where('name', $username);
		$this->db->or_where('email', $username);
		$this->db->update('admin_login', $data);
	}
	
	public function logout() {
		// Check if the user is logged in
		if ($this->session->userdata('username')) {
		// Destroy the session
		delete_cookie('remember_me');
		$this->session->sess_destroy();
			redirect('admin');
		} else {
			redirect('admin/dashboard');
		}
	}



	public function dashboard()
	{
		if($this->session->userdata['username']){
			$this->load->view('admin/dashboard');
		}
		else{
			redirect('admin');
		}
	}

	public function product(){
		// $page_data['category'] = $this->db->get('category')->result_array();
		if($this->session->userdata['username']){
			$page_data['title'] = 'Product';
			$this->load->view('admin/products');
		}
		else{
			redirect('admin');
		}

	}

	public function addproduct(){
		if($this->session->userdata['username']){
			$page_data['category'] = $this->db->get('category')->result_array();
			$page_data['subcategory'] = $this->db->get('subcategory')->result_array();
			$page_data['brand'] = $this->db->get('brand')->result_array();
			$page_data['title'] = 'Add Product';
			$this->load->view('admin/addproduct',$page_data);
		}
		else{
			redirect('admin');
		}

	}

	//category start
	public function category(){
		if($this->session->userdata['username']){
			$page_data['category'] = $this->db->get('category')->result_array();
			$page_data['title'] = 'Category';
			$this->load->view('admin/category',$page_data);
		}
		else{
			redirect('admin');
		}

	}

	public function addCategory(){
		if($this->session->userdata['username']){
			if($this->input->post()){
				$this->form_validation->set_error_delimiters('<div class="error"','</div>');
				$this->form_validation->set_rules('category', 'Category', 'required');
				$this->form_validation->set_rules('slug', 'Slug', 'required');

				if ($this->form_validation->run() == FALSE) {
					$page_data['message'] = 'Something Wrong';
				} else {
					if($_FILES['mainimage']['name'] != ""){
						$uploaded_data=$this->uploadimg(array('upload_path'=>'./uploads/category_image/','name'=>'mainimage'));
					}
					if($_FILES['icon']['name']!= ""){
					$uploaded_data1=$this->uploadimg(array('upload_path'=>'./uploads/category_icon/','name'=>'icon'));
					}

					$data = [
						'category_name' => $this->input->post('category'),
						'category_slug' => $this->input->post('slug'),
						'created_on' => date('y-m-d h:i:a'),
					];

					if(is_countable($uploaded_data) && count($uploaded_data)>=1){
						$data['category_image']=$uploaded_data['file_name'];
					}

					if(is_countable($uploaded_data1) && count($uploaded_data1)>=1){
						$data['category_icon']=$uploaded_data1['file_name'];
					}
					if($this->db->insert('category',$data)){
						$page_data['message'] = 'Insert Successfully';
					}
					else{
						$page_data['message'] = 'Something Wrong';
					}
				}
			}
			$page_data['title'] = 'Add Category';
				$this->load->view('admin/addCategory',$page_data);
		}
		else{
			redirect('admin');
		}
	}

	public function editCategory($id=false){
		if($this->session->userdata['username']){
			if($this->input->post()){
				$this->form_validation->set_error_delimiters('<div class="error"','</div>');
				$this->form_validation->set_rules('category', 'Category', 'required');
				$this->form_validation->set_rules('slug', 'Slug', 'required');

				if ($this->form_validation->run() == FALSE) {
					$page_data['message'] = 'Something Wrong';
				} else {
					if($_FILES['mainimage']['name'] != ""){
						$uploaded_data=$this->uploadimg(array('upload_path'=>'./uploads/category_image/','name'=>'mainimage'));
					}
					if($_FILES['icon']['name']!= ""){
					$uploaded_data1=$this->uploadimg(array('upload_path'=>'./uploads/category_icon/','name'=>'icon'));
					}

					$data = [
						'category_name' => $this->input->post('category'),
						'category_slug' => $this->input->post('slug'),
						'modified_on' => date('y-m-d h:i:a'),
					];

					if(is_countable($uploaded_data) && count($uploaded_data)>=1){
						$data['category_image']=$uploaded_data['file_name'];
					}

					if(is_countable($uploaded_data1) && count($uploaded_data1)>=1){
						$data['category_icon']=$uploaded_data1['file_name'];
					}
					$this->db->where('id',$id);
					if($this->db->update('category',$data)){
						redirect('admin/category');
					}
					else{
						$page_data['message'] = 'Something Wrong';
					}
				}
			}
			$page_data['category'] = $this->db->get_where('category',array('id'=>$id))->row();
			$page_data['title'] = 'Edit Category';
				$this->load->view('admin/addCategory',$page_data);
		}
		else{
			redirect('admin');
		}
	}

	public function categorydelete(){
		if($this->session->userdata['username']){
			$id = $this->input->post('row_id');
			if($this->db->where('id',$id)->delete('category')){
				echo 'success';
			}else{
				echo 'error';
			}
		}
		else{
			redirect('admin');
		}
	}
	// category end

	//subcategory start
	public function subcategory(){
		if($this->session->userdata['username']){
			$this->db->select('*, subcategory.id as sid');
			$this->db->from('subcategory');
			$this->db->join('category', 'subcategory.category_id = category.id', 'left');
			$page_data['subcategory'] = $this->db->get()->result_array();
			$page_data['title'] = 'Category';
			$this->load->view('admin/subCategory',$page_data);
		}
		else{
			redirect('admin');
		}
	}

	public function addsubcategory(){
		if($this->session->userdata['username']){
			if($this->input->post()){
				$this->form_validation->set_error_delimiters('<div class="error"','</div>');
				$this->form_validation->set_rules('subcategory', 'Subcategory', 'required');
				$this->form_validation->set_rules('slug', 'Slug', 'required');

				if ($this->form_validation->run() == FALSE) {
					$page_data['message'] = 'Something Wrong ';
				} else {
					if($_FILES['mainimage']['name'] != ""){
						$uploaded_data=$this->uploadimg(array('upload_path'=>'./uploads/subcategory/','name'=>'mainimage'));
					}
					$data = [
						'subcategory_name' => $this->input->post('subcategory'),
						'subcategory_slug' => $this->input->post('slug'),
						'category_id' => $this->input->post('category'),
						'created_on' => date('y-m-d h:i:a'),
					];

					if(is_countable($uploaded_data) && count($uploaded_data)>=1){
						$data['subcategory_image']=$uploaded_data['file_name'];
					}

					if($this->db->insert('subcategory',$data)){
						$page_data['message'] = 'Insert Successfully';
					}
					else{
						$page_data['message'] = 'Something Wrong';
					}
				}
			}
			$page_data['category'] = $this->db->get('category')->result_array();
			$page_data['title'] = 'Add Sub Category';
				$this->load->view('admin/addSubCategory',$page_data);
		}else{
			redirect('admin');
		}
	}

	public function editsubcategory($id=false){
		if($this->session->userdata['username']){
			if($this->input->post()){
				$this->form_validation->set_error_delimiters('<div class="error"','</div>');
				$this->form_validation->set_rules('subcategory', 'Subcategory', 'required');
				$this->form_validation->set_rules('slug', 'Slug', 'required');

				if ($this->form_validation->run() == FALSE) {
					$page_data['message'] = 'Something Wrong ';
				} else {
					if($_FILES['mainimage']['name'] != ""){
						$uploaded_data=$this->uploadimg(array('upload_path'=>'./uploads/subcategory/','name'=>'mainimage'));
					}
					$data = [
						'subcategory_name' => $this->input->post('subcategory'),
						'subcategory_slug' => $this->input->post('slug'),
						'category_id' => $this->input->post('category'),
						'created_on' => date('y-m-d h:i:a'),
					];

					if(is_countable($uploaded_data) && count($uploaded_data)>=1){
						$data['subcategory_image']=$uploaded_data['file_name'];
					}

					$this->db->where('id',$id);
					if($this->db->update('subcategory',$data)){
						redirect('admin/subcategory');
					}
					else{
						$page_data['message'] = 'Something Wrong';
					}
				}
			}
			$page_data['category'] = $this->db->get('category')->result_array();
			$page_data['subcategory'] = $this->db->get_where('subcategory',array('id'=>$id))->row();
			$page_data['title'] = 'Add Sub Category';
				$this->load->view('admin/addSubCategory',$page_data);
		}		else{
			redirect('admin');
		}
	}

	public function subcategorydelete(){
		if($this->session->userdata['username']){
			$id = $this->input->post('row_id');
			if($this->db->where('id',$id)->delete('subcategory')){
				echo 'success';
			}else{
				echo 'error';
			}
		}
		else{
			redirect('admin');
		}
	}
	//subcategory end

	//brand start
	public function brand(){
		if($this->session->userdata['username']){
			$page_data['subcategories'] = $this->db->get('subcategory')->result_array();
			$this->db->select('*, brand.id as bid');
			$this->db->from('subcategory');
			$this->db->join('brand', 'subcategory.id = brand.subcategory_id', 'right');
			$page_data['brand'] = $this->db->get()->result_array();
			$page_data['title'] = 'Brand';
			$this->load->view('admin/brand',$page_data);
		}
		else{
			redirect('admin');
		}
	}

	public function addbrand(){
		if($this->session->userdata['username']){
			if($this->input->post()){
				$this->form_validation->set_error_delimiters('<div class="error"','</div>');
				$this->form_validation->set_rules('brand', 'Brand', 'required');

				if ($this->form_validation->run() == FALSE) {
					$page_data['message'] = 'Something Wrong ';
				} else {
					if($_FILES['brandicon']['name'] != ""){
						$uploaded_data=$this->uploadimg(array('upload_path'=>'./uploads/brand_icon/','name'=>'brandicon'));
					}
					$data = [
						'brand_name' => $this->input->post('brand'),
						'subcategory_id' => $this->input->post('subcategory'),
						'created_on' => date('y-m-d h:i:a'),
					];

					if(is_countable($uploaded_data) && count($uploaded_data)>=1){
						$data['brand_icon']=$uploaded_data['file_name'];
					}

					if($this->db->insert('brand',$data)){
						$page_data['message'] = 'Insert Successfully';
					}
					else{
						$page_data['message'] = 'Something Wrong';
					}
				}
			}
			$page_data['subcategories'] = $this->db->get('subcategory')->result_array();
			$page_data['title'] = 'Add Brand';
				$this->load->view('admin/addbrand',$page_data);
		}
		else{
			redirect('admin');
		}
	}

	public function editbrand($id=false){
		if($this->session->userdata['username']){
			if($this->input->post()){
				$this->form_validation->set_error_delimiters('<div class="error"','</div>');
				$this->form_validation->set_rules('brand', 'Brand', 'required');

				if ($this->form_validation->run() == FALSE) {
					$page_data['message'] = 'Something Wrong ';
				} else {
					if($_FILES['brandicon']['name'] != ""){
						$uploaded_data=$this->uploadimg(array('upload_path'=>'./uploads/brand_icon/','name'=>'brandicon'));
					}
					$data = [
						'brand_name' => $this->input->post('brand'),
						'subcategory_id' => $this->input->post('subcategory'),
						'modified_on' => date('y-m-d h:i:a'),
					];

					if(is_countable($uploaded_data) && count($uploaded_data)>=1){
						$data['brand_icon']=$uploaded_data['file_name'];
					}

					$this->db->where('id',$id);
					if($this->db->update('brand',$data)){
						redirect('admin/brand');
					}
					else{
						$page_data['message'] = 'Something Wrong';
					}
				}
			}
			$page_data['subcategories'] = $this->db->get('subcategory')->result_array();
			$page_data['brand'] = $this->db->get_where('brand',array('id'=>$id))->row();
			$page_data['title'] = 'Edit Brand';
			$this->load->view('admin/addbrand',$page_data);
		}
		else{
			redirect('admin');
		}
	}

	public function brandelete(){
		if($this->session->userdata['username']){
			$id = $this->input->post('row_id');
			if($this->db->where('id',$id)->delete('brand')){
				echo 'success';
			}else{
				echo 'error';
			}
		}
		else{
			redirect('admin');
		}
	}

	public function getsuboptions()
	{
		$selectedValue = $this->input->post('selectedValue');
		$options = $this->db->get_where('subcategory', ['category_id' => $selectedValue])->result_array();
		print_r($this->db->last_query());
		echo json_encode($options);
	}
	//brand end

	//offerslider start
	public function offerslider(){
		if($this->session->userdata['username']){
			$page_data['offerslider'] = $this->db->get('offerslider')->result_array();
			$page_data['title'] = 'Offer Slider';
			$this->load->view('admin/offerslider',$page_data);
		}
		else{
			redirect('admin');
		}
	}

	public function addofferslider(){
		if($this->session->userdata['username']){
			if($this->input->post()){
				$this->form_validation->set_error_delimiters('<div class="error"','</div>');
				$this->form_validation->set_rules('slidername', 'Slidername', 'required');
				$this->form_validation->set_rules('title', 'Title', 'required');

				if ($this->form_validation->run() == FALSE) {
					$page_data['message'] = 'Something Wrong ';
				} else {
					if($_FILES['mainimage']['name'] != ""){
						$uploaded_data=$this->uploadimg(array('upload_path'=>'./uploads/offer_slider/','name'=>'mainimage'));
					}

					$data = [
						'slider_name' => $this->input->post('slidername'),
						'for' => $this->input->post('title'),
						'button' => $this->input->post('redirect'),
						'created_on' => date('y-m-d h:i:a'),
					];

					if(is_countable($uploaded_data) && count($uploaded_data)>=1){
						$data['slider_image']=$uploaded_data['file_name'];
					}


					if($this->db->insert('offerslider',$data)){
						$page_data['message'] = 'Insert Successfully';
					}
					else{
						$page_data['message'] = 'Something Wrong';
					}
				}
			}
			$page_data['category'] = $this->db->get('category')->result_array();
			$page_data['title'] = 'Add Add Offer Slider';
			$this->load->view('admin/addOfferSlider',$page_data);
		}
		else{
			redirect('admin');
		}
	}

	public function editofferslider($id=false){
		if($this->session->userdata['username']){
			if($this->input->post()){
				$this->form_validation->set_error_delimiters('<div class="error"','</div>');
				$this->form_validation->set_rules('slidername', 'Slidername', 'required');
				$this->form_validation->set_rules('title', 'Title', 'required');

				if ($this->form_validation->run() == FALSE) {
					$page_data['message'] = 'Something Wrong ';
				} else {
					if($_FILES['mainimage']['name'] != ""){
						$uploaded_data=$this->uploadimg(array('upload_path'=>'./uploads/offer_slider/','name'=>'mainimage'));
					}

					$data = [
						'slider_name' => $this->input->post('slidername'),
						'for' => $this->input->post('title'),
						'button' => $this->input->post('redirect'),
						'modified_on' => date('y-m-d h:i:a'),
					];

					if(is_countable($uploaded_data) && count($uploaded_data)>=1){
						$data['slider_image']=$uploaded_data['file_name'];
					}

					$this->db->where('id',$id);
					if($this->db->update('offerslider',$data)){
						redirect('admin/offerslider');
					}
					else{
						$page_data['message'] = 'Something Wrong';
					}
				}
			}
			$page_data['category'] = $this->db->get('category')->result_array();
			$page_data['offerslider'] = $this->db->get_where('offerslider',array('id'=>$id))->row();
			$page_data['title'] = 'Add Add Offer Slider';
			$this->load->view('admin/addOfferSlider',$page_data);
		}
		else{
			redirect('admin');
		}
	}

	public function offersliderdelete(){
		if($this->session->userdata['username']){
			$id = $this->input->post('row_id');
			if($this->db->where('id',$id)->delete('offerslider')){
				echo 'success';
			}else{
				echo 'error';
			}
		}
		else{
			redirect('admin');
		}

	}
	//offerslider end


	public function uploadimg($data)
    {
            $config['upload_path']          = $data['upload_path'];
            $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
			$config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
			$this->upload->initialize($config);
            if (!$this->upload->do_upload($data['name']))
            {
				// alert($this->upload->display_errors());
                print_r($this->upload->display_errors());
            }
            else
            {
                $uploaded_data = $this->upload->data();
                unset($this->upload);
                return $uploaded_data;
            }
    }



}