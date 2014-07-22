<?php

class Opinion_poll_model extends CI_Model { 
    
    public function __construct() { 
        $this->load->database(); 
    }
    
    public function total_votes() { 
        $query = $this->db->select('COUNT(choice) as choices_count')->get('js_libraries');
        return $query->row()->choices_count; 
    } 
    
    public function get_results() { 
        
        $libraries = array("", "Barack Obama", "Ron Paul", "Mitt Romney", "Paul Ryan");
        $table_rows = ''; 
        for ($i = 1; $i < 5; $i++) { 
   
            $result = $this->db->select('COUNT(choice) as choice_votes')->where('choice', $i)->get('js_libraries');
            
            if ($result->num_rows() > 0) {
                $row = $result->row_array();  
            }

            $table_rows .= "<tr><td>" . $libraries[$i] . " Got:</td><td><b>" . $row['choice_votes'] . "</b> votes</td></tr>"; 
        }   
        
        return $table_rows;
    }
    
    public function add_vote($choice) { 
        $ts = date("Y-m-d H:i:s"); 
        $data = array('choice' => $choice, 'ts' => $ts); 
        $this->db->insert('js_libraries', $data);   
    } 
        
} 

?>