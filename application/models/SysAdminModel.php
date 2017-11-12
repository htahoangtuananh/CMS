<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 10/31/2017
 * Time: 10:09 AM
 */

class SysadminModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function checkSysAdmin($id){
        $this -> db ->select('is_sysAdmin')
                    ->from('admin')
                    ->where('admin_id',$id);
        $result = $this->db->get()->row();
        return $result;
    }

    public function handleAjax($id, $table, $enable){
        $table_id = $table.'_id';
        $data = [
            'is_enable' => $enable
        ];
        $this->db->set($data)->where($table_id,$id)->update($table);
        return $this->db->insert_id();
    }
//LANGUAGE

    public function get_lang($id){
        $query = $this->db->select('*')
            ->from('language')
            ->where('lang_id',$id)
            ->get()
            ->row_array();

        return $query;
    }

    public function get_lang_list(){
        $query = $this->db->select('*')
            ->from('language')
            ->get()
            ->result_array();

        return $query;
    }

    public function add_lang($name,$acronym){
        $data = [
            'lang_name' => $name,
            'lang_acronym' => $acronym
        ];
        if($this->db->insert('language',$data)){

            return true;
        }else{

            return false;
        }
    }


//ADMIN

    public function add_admin($name,$email,$password,$is_sysadmin,$created_at){
        $data = [
            'username' => $name,
            'email' => $email,
            'password' => $password,
            'is_sysAdmin' => $is_sysadmin,
            'created_at' => $created_at
        ];
        if($this->db->insert('admin',$data)){

            return true;
        }else{

            return false;
        }
    }

    public function get_admin_list(){
        $query = $this->db->select('*')
                        ->from('admin')
                        ->get()
                        ->result_array();

        return $query;
    }


//BRANCH













//NODE
}