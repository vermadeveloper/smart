<?php defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Login extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user 
     */
    function get_user( $table, $cols,$condition ){
        return $this->db->select($cols)
                        ->get_where($table,$condition)
                        ->row_array();    
    }
}
