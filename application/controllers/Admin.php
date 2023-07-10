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

	//login start
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
	//login end

    //product start
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
		$this->db->select('*, product.id as pid');
		$this->db->from('category');
		$this->db->join('product', 'category.id = product.category', 'right');
		$page_data['product'] = $this->db->get()->result_array();
		// print_r($this->db->last_query());

		if($this->session->userdata['username']){
			$page_data['title'] = 'Product';
			$this->load->view('admin/products',$page_data);
		}
		else{
			redirect('admin');
		}

	}

	public function addproducts()
	{
		if ($this->session->userdata('username')) {
			if ($this->input->post()) {
	
				if($_FILES['thumbnail_image']['name'] != ""){
					$uploaded_data=$this->uploadimg(array('upload_path'=>'./uploads/product_thumb_image/','name'=>'thumbnail_image'));
				}
		
				$data = [
					'product_name' => $this->input->post('product_name'),
					'category' => $this->input->post('category'),
					'subCategory' => $this->input->post('subCategory'),
					'unit' => $this->input->post('unit'),
					'product_desc' => $this->input->post('product_desc'),
					// 'thumbnail_image' => $this->input->post('thumbnail_image'),
					'shipping' => $this->input->post('shipping'),
					'shippingcharge' => $this->input->post('shippingcharge'),
					'price' => $this->input->post('price'),
					'dis_price' => $this->input->post('dis_price'),
					'sku' => $this->input->post('sku'),
					'stock_status' => $this->input->post('stock_status'),
					// 'variant_color' => $variant_color,
					// 'variant_qty' => $variant_qty,
					'status' => $this->input->post('status'),
					'page_title' => $this->input->post('page_title'),
					'meta_description' => $this->input->post('meta_description'),
					'product_title'=> $this->input->post('titlename'),
					'pv'=> $this->input->post('pv'),
					'bv'=> $this->input->post('bv'),
					'cgst_dis'=> $this->input->post('cgstdis'),
					'sgst_dis'=> $this->input->post('sgstdis'),
					'cgst_amt'=> $this->input->post('cgstamt'),
					'sgst_amt'=> $this->input->post('sgstamt'),
					'rating' => $this->input->post('rating'),
					'created_on' => date('y-m-d'),
					// Add other fields as needed
				];
				if(is_countable($uploaded_data) && count($uploaded_data)>=1){
					$data['thumbnail_image']=$uploaded_data['file_name'];
				}

				if ($_FILES['multiple_images']['name'][0] != "") {
					$uploaded_data = $this->uploadmutipleimg(array('upload_path' => './uploads/product_img/', 'name' => 'multiple_images'));
					if (!empty($uploaded_data)) {
						$imagePaths = array();
						foreach ($uploaded_data as $image) {
							$imagePaths[] = $image['file_name'];
						}
						$data['multiple_images'] = implode(',', $imagePaths);
					} else {
						$page_data['message'] = 'Error uploading images.';
					}
					
				}

				// Insert data into the database
				if ($this->db->insert('product', $data)) {
					$lastInsertId = $this->db->insert_id(); // Get the last insert ID
					$page_data['message'] = 'Inserted Sucessfully';

					$product_variant_value = $this->input->post('product_variant_value');
				
					// Retrieve existing product IDs from the attributes table
					$this->db->select('product_id');
					$this->db->from('attributes');
					$this->db->where_in('id', $product_variant_value);
					$query = $this->db->get();
					$existingProductIDs = $query->result_array();
				
					$newProductIDs = array();
				
					// Collect existing product IDs
					foreach ($existingProductIDs as $row) {
						$existingIDs = explode(',', $row['product_id']);
						$newProductIDs = array_merge($newProductIDs, $existingIDs);
					}
				
					// Append new product IDs
					$newProductIDs[] = $lastInsertId;
				
					// Remove duplicates and convert to string
					$uniqueProductIDs = implode(',', array_unique($newProductIDs));
				
					// Update the attributes table with the combined product IDs
					$data1 = array('product_id' => $uniqueProductIDs);
					$this->db->where_in('id', $product_variant_value);
					$this->db->update('attributes', $data1);
				
					// Retrieve updated data from the attributes table
					$this->db->select('*');
					$this->db->from('attributes');
					$query = $this->db->get();
					$result = $query->result_array();
				
					// Access the retrieved data
					foreach ($result as $row) {
						// Access each row's data
						echo $row['id'];
						echo $row['product_id'];
						// ...
					}
				} else {
					$page_data['message'] = 'Somthing Wrong';
				}
				
			}
	
			// Prepare data for the view
			$page_data['category'] = $this->db->get('category')->result_array();
			$page_data['subcategory'] = $this->db->get('subcategory')->result_array();
			$page_data['attributes'] = $this->db->group_by('name')->get('attributes')->result_array();
			$page_data['brand'] = $this->db->get('brand')->result_array();
			$page_data['titles'] = $this->db->get('title')->result_array();
			$page_data['title'] = 'Add Product';
	
			// Load the view
			$this->load->view('admin/addproduct', $page_data);
		} else {
			redirect('admin');
		}
	}

	public function editproduct($id=false)
	{
		if ($this->session->userdata('username')) {
			if ($this->input->post()) {	
				// Upload thumbnail image
				if($_FILES['thumbnail_image']['name'] != ""){
					$uploaded_data=$this->uploadimg(array('upload_path'=>'./uploads/product_thumb_image/','name'=>'thumbnail_image'));
				}
		
				// Prepare data for database insertion
				$data = [
					'product_name' => $this->input->post('product_name'),
					'category' => $this->input->post('category'),
					'subCategory' => $this->input->post('subCategory'),
					'unit' => $this->input->post('unit'),
					'product_desc' => $this->input->post('product_desc'),
					// 'thumbnail_image' => $this->input->post('thumbnail_image'),
					'product_variant_name' => $this->input->post('product_variant_name'),
					'product_variant_value' => $this->input->post('product_variant_value'),
					'shipping' => $this->input->post('shipping'),
					'shippingcharge' => $this->input->post('shippingcharge'),
					'price' => $this->input->post('price'),
					'dis_price' => $this->input->post('dis_price'),
					'sku' => $this->input->post('sku'),
					'stock_status' => $this->input->post('stock_status'),
					// 'variant_color' => $variant_color,
					// 'variant_qty' => $variant_qty,
					'status' => $this->input->post('status'),
					'page_title' => $this->input->post('page_title'),
					'meta_description' => $this->input->post('meta_description'),
					'product_title'=> $this->input->post('titlename'),
					'pv'=> $this->input->post('bv'),
					'bv'=> $this->input->post('bv'),
					'cgst_dis'=> $this->input->post('cgstdis'),
					'sgst_dis'=> $this->input->post('sgstdis'),
					'cgst_amt'=> $this->input->post('cgstamt'),
					'sgst_amt'=> $this->input->post('sgstamt'),
					'rating' => $this->input->post('rating'),
					'modified_on' => date('y-m-d'),
					// Add other fields as needed
				];
				if(is_countable($uploaded_data) && count($uploaded_data)>=1){
					$data['thumbnail_image']=$uploaded_data['file_name'];
				}

				if ($_FILES['multiple_images']['name'][0] != "") {
					$uploaded_data = $this->uploadmutipleimg(array('upload_path' => './uploads/product_img/', 'name' => 'multiple_images'));
					if (!empty($uploaded_data)) {
						$imagePaths = array();
						foreach ($uploaded_data as $image) {
							$imagePaths[] = $image['file_name'];
						}
						$data['multiple_images'] = implode(',', $imagePaths);
					} else {
						$page_data['message'] = 'Error uploading images.';
					}
					
				}

				// Insert data into the database
				$this->db->where('id',$id);
				if ($this->db->update('product', $data)) {
					$page_data['message'] = 'Data Update Succussfully';
				} else {
					$page_data['message'] = 'Something Wrong ';
				}
			}
	
			// Prepare data for the view
			$page_data['category'] = $this->db->get('category')->result_array();
			$page_data['subcategory'] = $this->db->get('subcategory')->result_array();
			$page_data['attributes'] = $this->db->group_by('name')->get('attributes')->result_array();
			$page_data['brand'] = $this->db->get('brand')->result_array();
			$page_data['titles'] = $this->db->get('title')->result_array();
			$page_data['product'] = $this->db->get_where('product',array('id'=>$id))->row();
			$page_data['title'] = 'Add Product';
	
			// Load the view
			$this->load->view('admin/editproduct', $page_data);
		} else {
			redirect('admin');
		}
	}

	public function updateAttribute()
	{
		// Retrieve the attribute data from the AJAX request
		$attributeId = $this->input->post('attributeId');
		$product_id = $this->input->post('product_id');
		$isChecked = $this->input->post('isChecked');

		// Perform the database update
		

		if ($isChecked) {
			// Add the ID to the product_id column
			$this->db->set('product_id', "CONCAT(product_id, ',$product_id')", false);
		} else {
			// Remove the ID from the product_id column
			$this->db->set('product_id', "REPLACE(REPLACE(product_id, ',$product_id', ''), ',,', '')", false);
		}
		$this->db->where('id', $attributeId);
		$result = $this->db->update('attributes');

		// Return a response message
		if ($result) {
			echo 'Attribute updated successfully.';
		} else {
			echo 'Error updating attribute.';
		}
	}


	public function productdelete(){
		if($this->session->userdata['username']){
			$id = $this->input->post('row_id');
			if($this->db->where('id',$id)->delete('product')){
				echo 'success';
			}else{
				echo 'error';
			}
		}
		else{
			redirect('admin');
		}
	}

	public function fetch_attribute_values()
	{
		$attributeName = $this->input->post('attribute_name');

		// Perform database query to fetch the attribute values based on the attribute name
		$attributeValues = $this->db->get_where('attributes', array('name' => $attributeName))->result_array();

		// Generate HTML options for the attribute values
		$options = '';
		foreach ($attributeValues as $value) {
			$options .= "<option value=\"{$value['id']}\">{$value['value']}</option>";
		}

		echo $options;
	}
	//product end

	

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

	public function getsuboptions()
	{
		$selectedValue = $this->input->post('selectedValue');
		$options = $this->db->get_where('subcategory', ['category_id' => $selectedValue])->result_array();
		// print_r($this->db->last_query());
		echo json_encode($options);
	}
	//subcategory end

	//attributes start
	public function attributes(){
		if($this->session->userdata['username']){
			$this->db->select('*,GROUP_CONCAT(value) as att_value');
			$this->db->from('attributes');
			$this->db->group_by('name');
			$page_data['attributes'] = $this->db->get()->result_array();
			$page_data['title'] = 'Attributes';
			$this->load->view('admin/attributes',$page_data);
		}
		else{
			redirect('admin');
		}
	}

	public function addattributes(){
		if($this->session->userdata['username']){
			if ($this->input->server('REQUEST_METHOD') === 'POST') {
				$attriname = $this->input->post('attriname');
				$attributeValues = $this->input->post('attrivalue');
				if (!empty($attributeValues)) {
					foreach ($attributeValues as $value) {
						$data = array(
							'value' => $value,
							'name' =>  $attriname,
							'product_id' => '0',
							'created_on' => date('y-m-d')
						);
	
						$inserted_id = $this->db->insert('attributes',$data);
						if (!$inserted_id) {
							$page_data['message']= "Error occurred while inserting data.";
							return;
						}
					}
					$page_data['message'] = "Data inserted successfully.";
				} else {
					$page_data['message'] =  "No attribute values provided.";
				}
			}
			$page_data['subcategories'] = $this->db->get('subcategory')->result_array();
			$page_data['title'] = 'Add Attribute';
				$this->load->view('admin/addattributes',$page_data);
		}
		else{
			redirect('admin');
		}
	}
	//attributes end

	//title start
	public function title(){
		if($this->session->userdata['username']){
			$page_data['titles'] = $this->db->get('title')->result_array();
			$page_data['title'] = 'Title';
			$this->load->view('admin/features',$page_data);
		}
		else{
			redirect('admin');
		}
	}

	public function addtitle(){
		if($this->session->userdata['username']){
			if ($this->input->server('REQUEST_METHOD') === 'POST') {
				$titlename = $this->input->post('titlename');
				if (!empty($titlename)) {
						$data = array(
							'title_name' => $titlename,
							'created_on' => date('y-m-d')
						);
	
						$inserted_id = $this->db->insert('title',$data);
						if (!$inserted_id) {
							$page_data['message']= "Error occurred while inserting data.";
							return;
						}else{
							$page_data['message'] = "Data inserted successfully.";
						}
				} else {
					$page_data['message'] =  "No attribute values provided.";
				}
			}
			$page_data['titles'] = $this->db->get('title')->result_array();
			$page_data['title'] = 'Add title';
				$this->load->view('admin/addfeatures',$page_data);
		}
		else{
			redirect('admin');
		}
	}
	//attributes end

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

	public function getbrandoptions()
	{
		$selectedValue = $this->input->post('selectedValue');
		$options = $this->db->get_where('brand', ['subcategory_id' => $selectedValue])->result_array();
		// print_r($this->db->last_query());
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

	//banner start
	public function homebanner(){
		if($this->session->userdata['username']){
			$page_data['home_banner'] = $this->db->get_where('banner',array('banner_name'=>'home_banner'))->result_array();
			$this->load->view('admin/homebanner',$page_data);	
		}
		else{
			redirect('admin');
		}
	}

	public function categorybanner(){
		if($this->session->userdata['username']){
			$page_data['category_banner'] = $this->db->get_where('banner',array('banner_name'=>'category_banner'))->result_array();
			$this->load->view('admin/categorybanner',$page_data);
		}
		else{
			redirect('admin');
		}
	}

	public function edithomebanner($id=false){
		if($this->session->userdata['username']){
			if ($this->input->post()) {
				$data = [
					'status' => $this->input->post('status'),
					'modified_on' => date('y-m-d'),
				];
			
				// Check if a new image is uploaded
				if ($_FILES['image']['name'] != "") {
					$oldImage = $this->input->post('banner_img');
					$filePath = './uploads/banner/'.$oldImage;
			
					// Check if the old image file exists
					if (file_exists($filePath)) {
						// Attempt to delete the old image file
						if (@unlink($filePath)) {
							// File deleted successfully, upload the new image
							$uploaded_data = $this->uploadimg(array('upload_path' => './uploads/banner/', 'name' => 'image'));
			
							if (is_countable($uploaded_data) && count($uploaded_data) >= 1) {
								$data['banner_image'] = $uploaded_data['file_name'];
							} else {
								$page_data['message'] = 'Error uploading the new image.';
							}
						} else {
							// Delay and attempt deletion again
							sleep(1);
							if (@unlink($filePath)) {
								// File deleted successfully, upload the new image
								$uploaded_data = $this->uploadimg(array('upload_path' => './uploads/banner/', 'name' => 'image'));
			
								if (is_countable($uploaded_data) && count($uploaded_data) >= 1) {
									$data['banner_image'] = $uploaded_data['file_name'];
								} else {
									$page_data['message'] = 'Error uploading the new image.';
								}
							} else {
								$page_data['message'] = 'Error deleting the old image file.';
							}
						}
					} else {
						$page_data['message'] = 'Old image file does not exist.';
					}
				}
			
				$this->db->where('id', $id);
				if ($this->db->update('banner', $data)) {
					redirect('admin/homebanner');
					$page_data['message'] = 'Successfully updated the banner.';
				} else {
					$page_data['message'] = 'Something went wrong while updating the banner.';
				}
			}
			
			

			$page_data['home_banner'] = $this->db->get_where('banner',array('status'=>'1','banner_name'=>'home_banner','id'=>$id))->row();
			$this->load->view('admin/edithomebanner',$page_data);
		}
		else{
			redirect('admin');
		}
	}

	public function editcategorybanner($id=false){
		if($this->session->userdata['username']){
			if ($this->input->post()) {
				$data = [
					'status' => $this->input->post('status'),
					'modified_on' => date('y-m-d'),
				];
			
				// Check if a new image is uploaded
				if ($_FILES['image']['name'] != "") {
					$oldImage = $this->input->post('banner_img');
					$filePath = './uploads/banner/'.$oldImage;
			
					// Check if the old image file exists
					if (file_exists($filePath)) {
						// Attempt to delete the old image file
						if (@unlink($filePath)) {
							// File deleted successfully, upload the new image
							$uploaded_data = $this->uploadimg(array('upload_path' => './uploads/banner/', 'name' => 'image'));
			
							if (is_countable($uploaded_data) && count($uploaded_data) >= 1) {
								$data['banner_image'] = $uploaded_data['file_name'];
							} else {
								$page_data['message'] = 'Error uploading the new image.';
							}
						} else {
							// Delay and attempt deletion again
							sleep(1);
							if (@unlink($filePath)) {
								// File deleted successfully, upload the new image
								$uploaded_data = $this->uploadimg(array('upload_path' => './uploads/banner/', 'name' => 'image'));
			
								if (is_countable($uploaded_data) && count($uploaded_data) >= 1) {
									$data['banner_image'] = $uploaded_data['file_name'];
								} else {
									$page_data['message'] = 'Error uploading the new image.';
								}
							} else {
								$page_data['message'] = 'Error deleting the old image file.';
							}
						}
					} else {
						$page_data['message'] = 'Old image file does not exist.';
					}
				}
			
				$this->db->where('id', $id);
				if ($this->db->update('banner', $data)) {
					redirect('admin/homebanner');
					$page_data['message'] = 'Successfully updated the banner.';
				} else {
					$page_data['message'] = 'Something went wrong while updating the banner.';
				}
			}
			
			

			$page_data['home_banner'] = $this->db->get_where('banner',array('status'=>'1','banner_name'=>'home_banner','id'=>$id))->row();
			$this->load->view('admin/editcategorybanner',$page_data);
		}
		else{
			redirect('admin');
		}
	}
	//banner end

	//coupon start
	public function coupon(){
		if($this->session->userdata['username']){
			$page_data['coupon'] = $this->db->get_where('coupon',array('status'=>'active'))->result_array();
			$page_data['title'] = 'Coupon';
			$this->load->view('admin/couponlist',$page_data);
		}
		else{
			redirect('admin');
		}
	}

	public function addcoupon(){
		if($this->session->userdata['username']){
			if($this->input->post()){
				$this->form_validation->set_error_delimiters('<div class="error"','</div>');
				$this->form_validation->set_rules('couponcode', 'Couponcode', 'required');
				$this->form_validation->set_rules('enddate', 'Enddate', 'required');
				$this->form_validation->set_rules('discount', 'Discount', 'required');
				$this->form_validation->set_rules('status', 'Status', 'required');

				if ($this->form_validation->run() == FALSE) {
					$page_data['message'] = 'Something Wrong ';
				} else {
					$data = [
						'couponcode' => $this->input->post('couponcode'),
						'expiry_date' => $this->input->post('enddate'),
						'amt' => $this->input->post('discount'),
						'status' => $this->input->post('status'),
						'created_on' => date('y-m-d'),
					];

					if($this->db->insert('coupon',$data)){
						$page_data['message'] = 'Insert Successfully';
					}
					else{
						$page_data['message'] = 'Something Wrong';
					}
				}
			}
			$page_data['title'] = 'Add Coupon';
			$this->load->view('admin/create-coupon',$page_data);
		}
		else{
			redirect('admin');
		}
	}

	public function editcoupon($id=false){
		if($this->session->userdata['username']){
			if($this->input->post()){
				$this->form_validation->set_error_delimiters('<div class="error"','</div>');
				$this->form_validation->set_rules('couponcode', 'Couponcode', 'required');
				$this->form_validation->set_rules('enddate', 'Enddate', 'required');
				$this->form_validation->set_rules('discount', 'Discount', 'required');
				$this->form_validation->set_rules('status', 'Status', 'required');

				if ($this->form_validation->run() == FALSE) {
					$page_data['message'] = 'Something Wrong ';
				} else {
					$data = [
						'couponcode' => $this->input->post('couponcode'),
						'expiry_date' => $this->input->post('enddate'),
						'amt' => $this->input->post('discount'),
						'status' => $this->input->post('status'),
					];

					$this->db->where('id',$id);
					if($this->db->update('coupon',$data)){
						$page_data['message'] = 'Update Successfully';
					}
					else{
						$page_data['message'] = 'Something Wrong';
					}
				}
			}
			$page_data['coupon'] = $this->db->get_where('coupon',array('id'=>$id))->row();
			$page_data['title'] = 'Edit Coupon';
			$this->load->view('admin/create-coupon',$page_data);
		}
		else{
			redirect('admin');
		}
	}

	public function coupondelete(){
		if($this->session->userdata['username']){
			$id = $this->input->post('row_id');
			if($this->db->where('id',$id)->delete('coupon')){
				echo 'success';
			}else{
				echo 'error';
			}
		}
		else{
			redirect('admin');
		}

	}
	//coupon end

	//currency start
	public function currency(){
		if($this->session->userdata['username']){
			$this->db->limit(2); 
            $page_data['currency'] = $this->db->get('currency')->result_array();
			$page_data['title'] = 'Currency';
			$this->load->view('admin/currency',$page_data);
		}
		else{
			redirect('admin');
		}
	}

	public function editcurrency($id=false){
		if($this->session->userdata['username']){
			if($this->input->post()){
				$currencycode = $this->input->post('currencycode');
				$this->db->set('status', '0');
				$this->db->update('currency');
				$data = [
					'currency_rate' => $this->input->post('rate'),
					'status' => $this->input->post('status'),
				];
				$this->db->where('id', $id);
				if($this->db->update('currency', $data)){
				$data['message'] = 'Successfully Update';
				}else{
					$data['message'] = 'failed';
				}
			}
			$page_data['currency'] = $this->db->get_where('currency',array('id'=>$id))->row();
			$page_data['title'] = 'Edit Currency';
			$this->load->view('admin/editcurrency',$page_data);
		}
		else{
			redirect('admin');
		}
	}

	public function currencysession(){
		$currencycode = $this->input->post('currencycode');
		$this->db->set('status', '0');
		$this->db->update('currency');
		$data = [
			'status' => '1',
		];
		$this->db->where('currency_name', $currencycode);
		if($this->db->update('currency', $data)){
		$data['success'] = 'success';
		}else{
			$data['error'] = 'failed';
		}
		echo json_encode($data);
	}

	//currency end

	//currency start
	public function ads(){
		if($this->session->userdata['username']){
			$this->db->limit(2); 
            $page_data['ads'] = $this->db->get_where('ads',array('status'=>'1'))->result_array();
			$page_data['title'] = 'Currency';
			$this->load->view('admin/adslist',$page_data);
		}
		else{
			redirect('admin');
		}
	}

	public function addads(){
		if($this->session->userdata['username']){
			if($this->input->post()){
				$this->form_validation->set_error_delimiters('<div class="error"','</div>');
				$this->form_validation->set_rules('ads_name', 'Ads_name', 'required');
				$this->form_validation->set_rules('star', 'Star', 'required');
				$this->form_validation->set_rules('review', 'Review', 'required');
				$this->form_validation->set_rules('desc', 'Desc', 'required');
				$this->form_validation->set_rules('address', 'Address', 'required');
				$this->form_validation->set_rules('contact', 'Contact', 'required');

				if ($this->form_validation->run() == FALSE) {
					$page_data['message'] = 'Something Wrong ';
				} else {
					if($_FILES['mainimage']['name'] != ""){
						$uploaded_data=$this->uploadimg(array('upload_path'=>'./uploads/ads/','name'=>'mainimage'));
					}
					$data = [
						'ads_name' => $this->input->post('ads_name'),
						'star' => $this->input->post('star'),
						'review' => $this->input->post('review'),
						'desc' => $this->input->post('desc'),
						'address' => $this->input->post('address'),
						'contact' => $this->input->post('contact'),
						'created_on' => date('y-m-d h:i:a'),
					];

					if(is_countable($uploaded_data) && count($uploaded_data)>=1){
						$data['logo']=$uploaded_data['file_name'];
					}

					if($this->db->insert('ads',$data)){
						$page_data['message'] = 'Insert Successfully';
					}
					else{
						$page_data['message'] = 'Something Wrong';
					}
				}
			}
			$page_data['title'] = 'Add Ads';
			$this->load->view('admin/addAds',$page_data);
		}
		else{
			redirect('admin');
		}
	}

	public function editads($id=false){
		if($this->session->userdata['username']){
			if ($this->input->post()) {
				$this->form_validation->set_error_delimiters('<div class="error"', '</div>');
				$this->form_validation->set_rules('ads_name', 'Ads_name', 'required');
				$this->form_validation->set_rules('star', 'Star', 'required');
				$this->form_validation->set_rules('review', 'Review', 'required');
				$this->form_validation->set_rules('desc', 'Desc', 'required');
				$this->form_validation->set_rules('address', 'Address', 'required');
				$this->form_validation->set_rules('contact', 'Contact', 'required');
			
				if ($this->form_validation->run() == FALSE) {
					$page_data['message'] = 'Something Wrong';
				} else {
					$this->db->where('id', $id);
					$oldImage = $this->db->get('ads')->row()->logo; // Retrieve the old image filename
			
					if ($_FILES['mainimage']['name'] != "") {
						$uploaded_data = $this->uploadimg(array('upload_path' => './uploads/ads/', 'name' => 'mainimage'));
			
						if (is_countable($uploaded_data) && count($uploaded_data) >= 1) {
							$data['logo'] = $uploaded_data['file_name'];
						}
			
						// Delete the old image file
						if (!empty($oldImage) && file_exists('./uploads/ads/' . $oldImage)) {
							unlink('./uploads/ads/' . $oldImage);
						}
					}
			
					$data = [
						'ads_name' => $this->input->post('ads_name'),
						'star' => $this->input->post('star'),
						'review' => $this->input->post('review'),
						'desc' => $this->input->post('desc'),
						'address' => $this->input->post('address'),
						'contact' => $this->input->post('contact'),
						'created_on' => date('y-m-d h:i:a'),
					];
			
					$this->db->where('id', $id);
					if ($this->db->update('ads', $data)) {
						$page_data['message'] = 'Update Successfully';
					} else {
						$page_data['message'] = 'Something Wrong';
					}
				}
			}
			
			$page_data['ads'] = $this->db->get_where('ads',array('id'=>$id))->row();
			$page_data['title'] = 'Edit Ads';
			$this->load->view('admin/addAds',$page_data);
		}
		else{
			redirect('admin');
		}
	}

	public function adsdelete(){
		if($this->session->userdata['username']){
			$id = $this->input->post('row_id');
			if($this->db->where('id',$id)->delete('coupon')){
				echo 'success';
			}else{
				echo 'error';
			}
		}
		else{
			redirect('admin');
		}

	}


	//currency end


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

	public function uploadmutipleimg($data)
		{
    	$config['upload_path'] = $data['upload_path'];
    	$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
    	$config['encrypt_name'] = TRUE;

    	$this->load->library('upload', $config);
    	$this->upload->initialize($config);

    	$uploaded_data = array(); // Array to store uploaded file data

    	// Loop through each uploaded file
    	foreach ($_FILES[$data['name']]['name'] as $key => $filename) {
    	    $_FILES['userfile']['name'] = $_FILES[$data['name']]['name'][$key];
    	    $_FILES['userfile']['type'] = $_FILES[$data['name']]['type'][$key];
    	    $_FILES['userfile']['tmp_name'] = $_FILES[$data['name']]['tmp_name'][$key];
    	    $_FILES['userfile']['error'] = $_FILES[$data['name']]['error'][$key];
    	    $_FILES['userfile']['size'] = $_FILES[$data['name']]['size'][$key];

    	    if (!$this->upload->do_upload('userfile')) {
    	        $error = $this->upload->display_errors();
    	        print_r($error);
    	    } else {
    	        $uploaded_data[] = $this->upload->data();
    	    }
    	}

 		   unset($this->upload);
    	return $uploaded_data;
	}

}