<?php

class Opinion_poll_model {
    
    private $db_handle;
    private $host = 'localhost';
    private $db = 'opinion_poll';
    private $uid = 'root';
    private $pwd = 'root';
    
    //the class constructor method that is used to establish 
    //the database connection
    public function __construct() {
        //connect to MySQL Server
        $this->db_handle = mysql_connect($this->host, $this->uid, $this->pwd); 
        
        if (!$this->db_handle) {
            die("Unable to connect to MySQL: " . mysql_error ());
        }
        
        if (!mysql_select_db($this->db)) {
            die ("Unable to select database: " . mysql_error());
        }
    }
    
    //the method for executing queries such as insert, update and delete
    private function execute_query($sql_stmt) {
        $result = mysql_query($sql_stmt); //execute SQL Statement
        return !$result ? false : true;
    }
    
    //the method for retrieving data from the database and returning 
    //a numeric array.
    public function select($sql_stmt) {
        $result = mysql_query($sql_stmt);
        if (!$result) {
            die ("Database access failed: " . mysql_error());
        }
        
        $rows = mysql_num_rows($result);
        $data = array();
        
        if ($rows) {
            while ($row = mysql_fetch_array($result)) {
                $data = $row;
            }
        }
        
        return $data;
    }
    
    //insert method that calls the execute_query method.
    public function insert($sql_stmt) {
        return $this->execute_query($sql_stmt);
    }
    
    //the class destructor that closes the database connection.
    public function __destruct() {
        mysql_close($this->db_handle);
    }
    
}

?>

