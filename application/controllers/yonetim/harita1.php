<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Harita1 extends Backend_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['css']=array("css/bootstrap.min.css",
            "css/font-awesome.min.css",
            "css/smartadmin-production-plugins.min.css",
            "css/smartadmin-production.min.css",
            "css/smartadmin-skins.min.css",
            "css/smartadmin-rtl.min.css",
            "css/demo.min.css"
        );
        $data['jss']=array("js/app.config.js",
            "js/plugin/jquery-touch/jquery.ui.touch-punch.min.js",
            "js/bootstrap/bootstrap.min.js",
            "js/notification/SmartNotification.min.js",
            "js/smartwidgets/jarvis.widget.min.js",
            "js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js",
            "js/plugin/sparkline/jquery.sparkline.min.js",
            "js/plugin/jquery-validate/jquery.validate.min.js",
            "js/plugin/masked-input/jquery.maskedinput.min.js",
            "js/plugin/select2/select2.min.js",
            "js/plugin/bootstrap-slider/bootstrap-slider.min.js",
            "js/plugin/msie-fix/jquery.mb.browser.min.js",
            "js/plugin/fastclick/fastclick.min.js",
            "js/demo.min.js",
            "js/app.min.js",
            "js/speech/voicecommand.min.js",
            "js/smart-chat-ui/smart.chat.ui.min.js",
            "js/smart-chat-ui/smart.chat.manager.min.js",

            "js/googlemaps.js"
        );

        $data['main_content'] = 'admin/harita1';
        $this->load->view('admin/includes/template', $data);
    }
}