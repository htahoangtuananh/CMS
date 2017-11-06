<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 8/31/2017
 * Time: 4:07 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class city extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_city()
    {
        $query = $this->db  ->select('*')
                            ->from('cities')
                            ->get()->result_array();

        return $query;
    }

    public function get_selected_city($id)
    {
        $query = $this->db  ->select('city_name')
                            ->from('cities')
                            ->where('id',$id)
                            ->get()->row_array();

        return $query;
    }
}