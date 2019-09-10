<?php if (!defined('BASEPATH'))     exit('No direct script access allowed');
//flash Messages
if(!function_exists('notify'))
{
    function notify($msg, $type = 'info', $judul = '') 
    { 
        $tpl = '';
        switch ($type)
        {
            case 'info' :
            $tpl  = '<div class="alert  alert-info fade">';
            break;

            case 'success' :
            $tpl  = '<div class="alert  alert-success fade">';
            break;

            case 'warning' :
            $tpl  = '<div class="alert  alert-warning fade">';
            break;

            case 'error' :
            $tpl  = '<div class="alert  alert-danger fade">';
            break;

            default :
            $tpl  = '<div class="alert  alert-info fade>';
            break;
        }

        $tpl .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        $tpl .= '<strong> '. (trim($judul) !='' ? ucwords($judul) : ucwords($type)) .' ! </strong> ' . $msg;
        $tpl .= '<script>
                    jQuery(document).ready(function(){
                    jQuery(".alert").delay(10000).addClass("in").fadeOut("slow");
                });
                </script>';
        $tpl .= '</div>';
        return $tpl;
    }
}
?>