<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

    //add wishlist
    public function whistlist(){
        $id = $this->input->post('heartid');
        $query = $this->db->get_where('product', array('id' => $id))->row();
        $whislistValue = $query->whislist;
    
        // Toggle the value of `whislist`
        $newWhislistValue = $whislistValue == 1 ? 0 : 1;
    
        $data = [
            'whislist' => $newWhislistValue,
        ];
    
        $this->db->where('id', $id);
        $this->db->update('product', $data);
    
        // Send JSON response indicating success and the updated whislist value
        echo json_encode(['success' => true, 'whislist' => $newWhislistValue]);
    }
    
    //add to cart
    public function addToCart()
    {
        $product_id = $this->input->post('product_id');
        $quantity = $this->input->post('quantity');
        $user_id = $this->input->post('userid');

        // Check if the product already exists in the cart
        $cart_item = $this->db->get_where('addtocart', array('product_id' => $product_id, 'user_id' => $user_id))->row();
        
        if ($cart_item) {
            // Update the existing cart item with the new quantity
            $new_quantity = $cart_item->quantity + $quantity;
            $this->db->where('id', $cart_item->id);
            $this->db->update('addtocart', array('quantity' => $new_quantity));
        } else {
            // Insert a new cart item
            $data = array(
                'user_id' => $user_id,
                'product_id' => $product_id,
                'quantity' => $quantity,
                'created_on' => date('Y-m-d H:i:s')
            );
            $this->db->insert('addtocart', $data);
        }

        // Return a response indicating success or failure
        $response = array('success' => true);
        echo json_encode($response);
    }

    //remove from cart
    public function removeFromCart()
    {
        $cart_item_id = $this->input->post('cart_item_id');
        $user_id = $this->input->post('userid');

        // Delete the cart item
        $this->db->where('id', $cart_item_id);
        $this->db->where('user_id', $user_id);
        $this->db->delete('addtocart');

        // Return a response indicating success or failure
        $response = array('success' => true);
        echo json_encode($response);
    }

    // quantity update
    public function updateSubtotal()
    {
    $addcartid = $this->input->post('cart');
    $quantity = $this->input->post('quantity');
    
    // Perform necessary calculations and retrieve the subtotal
    $this->db->where('id', $addcartid);
            $this->db->update('addtocart', array('quantity' => $quantity));
    // Prepare the response
    $response = array(
        'success' => true,
        'subtotal' => $subtotal
    );
    
    // Send the response as JSON
    header('Content-Type: application/json');
    echo json_encode($response);
    }


    
}
?>