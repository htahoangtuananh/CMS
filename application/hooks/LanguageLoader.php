<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 10/31/2017
 * Time: 4:54 PM
 */



class LanguageLoader
{

    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');
        $siteLang = $ci->session->userdata('site_lang');
        if ($siteLang != 'eng') {
            $ci->lang->load('message',$siteLang);
        } else {
            $ci->lang->load('message','english');
        }
    }
}