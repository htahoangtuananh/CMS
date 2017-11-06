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

}