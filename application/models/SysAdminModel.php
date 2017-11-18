<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 10/31/2017
 * Time: 10:09 AM
 */

class SysAdminModel extends CI_Model
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

    public function get_branch($id){
        $query = $this->db->select('*')
            ->from('branch')
            ->where('branch_id',$id)
            ->get()
            ->row_array();

        return $query;
    }

    public function get_branch_list($lang){
        $query = $this->db->select('*')
            ->from('branch')
            ->where('branch.lang',$lang)
            ->get()
            ->result_array();

        return $query;
    }

    public function add_branch($name,$lang_acronym,$icon){
        $data = [
            'branch_name' => $name,
            'lang' => $lang_acronym,
            'icon' => $icon
        ];
        if($this->db->insert('branch',$data)){

            return true;
        }else{

            return false;
        }
    }

    public function update_branch($id,$name,$lang_acronym,$icon){
        $data = [
            'branch_name' => $name,
            'lang' => $lang_acronym,
            'icon' => $icon
        ];
        if($this->db->set($data)->where('branch_id',$id)->update('branch')){

            return true;
        }else{

            return false;
        }
    }

//NODE

    public function get_node_list($lang){
        $query = $this->db->select('*')
            ->from('node')
            ->where('node.lang',$lang)
            ->join('branch','branch.branch_id = node.branch_id' )
            ->get()
            ->result_array();

        return $query;
    }

    public function get_enable_node_list($lang){
        $query = $this->db->select('*')
            ->from('node')
            ->where('node.lang',$lang)
            ->where('node.is_enable',1)
            ->get()
            ->result_array();

        return $query;
    }

    public function add_node($name,$link,$branch_id,$lang_acronym){
        $data = [
            'node_name' => $name,
            'node_link' => $link,
            'branch_id' => $branch_id,
            'lang' => $lang_acronym,
        ];
        if($this->db->insert('node',$data)){

            return true;
        }else{

            return false;
        }
    }
}