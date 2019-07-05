<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	# untuk print_f
	function dd( $var, $exit = null ){
	    $CI = &get_instance();
	    $result =  '<pre>';
	    if ( $var == 'lastdb' ){
	        print_r($CI->db->last_query());
	    } else if ( $var == 'post' ){
	        print_r($CI->input->post());
	    } else if ( $var == 'get' ){
	        print_r($CI->input->get());
	    } else {
	        print_r( $var );
	    }
        $result .= '</pre>';

	    if ( $exit )
	    {
	        exit();
        }
        
        return die($result);
	}