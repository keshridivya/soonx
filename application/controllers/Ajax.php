<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

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
    
    
}
?>