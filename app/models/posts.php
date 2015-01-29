<?php namespace models;

class Posts extends \core\Model
{
    function __construct() {
        parent::__construct();
    }
    
    public function get_post() {
        return $this->_db->select("SELECT * FROM ". PREFIX. "posts");
    }
    
}    


