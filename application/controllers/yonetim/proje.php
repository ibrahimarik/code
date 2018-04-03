<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proje extends Backend_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('googlemaps');
        $this->load->helper('menu');

    }

    public function index()
    {

    }
    public function ekle()
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
            "js/smart-chat-ui/smart.chat.manager.min.js"


        );

        $config['center'] = '39.943896, 32.855429';
        //  $config['zoom'] = '10';
        $config['zoom'] = 'auto';
        $this->googlemaps->initialize($config);


        $polygon = array();
        $polygon['points'] = array('40.176728,33.316618',
            '40.178655,33.314064',
            '40.174362,33.308735',
            '40.175583,33.307275',
            '40.176846,33.307525',
            '40.180117,33.310104',
            '40.186625,33.309706',
            '40.18733,33.30861',
            '40.187289,33.306352',
            '40.194552,33.303881',
            '40.194512,33.301317',
            '40.196532,33.298762',
            '40.196999,33.298947',
            '40.198548,33.297489',
            '40.199117,33.294805',
            '40.200007,33.294504',
            '40.201223,33.294997',
            '40.205394,33.293245',
            '40.206242,33.290867',
            '40.207229,33.28965',
            '40.210514,33.286428',
            '40.2129,33.287048',
            '40.212757,33.287964',
            '40.213409,33.28931',
            '40.215096,33.288584',
            '40.215053,33.287302',
            '40.215662,33.286877',
            '40.21834,33.28298',
            '40.220121,33.282438',
            '40.220164,33.283781',
            '40.221098,33.284579',
            '40.221047,33.286411',
            '40.221655,33.286719',
            '40.225363,33.28252',
            '40.227088,33.278688',
            '40.226056,33.272954',
            '40.222298,33.27021',
            '40.218338,33.264465',
            '40.216545,33.257805',
            '40.213718,33.260677',
            '40.210665,33.262554',
            '40.20534,33.257862',
            '40.204596,33.25666',
            '40.202295,33.255901',
            '40.198789,33.255683',
            '40.196542,33.254104',
            '40.195341,33.252598',
            '40.193981,33.252388',
            '40.190899,33.249306',
            '40.186401,33.247652',
            '40.182275,33.24361',
            '40.180138,33.23944',
            '40.178097,33.239023',
            '40.174857,33.236487',
            '40.173556,33.232935',
            '40.173564,33.232919',
            '40.17571,33.22878',
            '40.176451,33.224483',
            '40.177766,33.221349',
            '40.176932,33.219777',
            '40.177458,33.218345',
            '40.177259,33.212818',
            '40.175485,33.209469',
            '40.174548,33.206668',
            '40.172196,33.204751',
            '40.171001,33.199834',
            '40.171322,33.19581',
            '40.172164,33.192878',
            '40.171591,33.191034',
            '40.16992,33.189051',
            '40.168199,33.184816',
            '40.170819,33.182981',
            '40.172893,33.182946',
            '40.174221,33.18299',
            '40.177945,33.178155',
            '40.180459,33.177138',
            '40.183809,33.177284',
            '40.18434,33.172304',
            '40.184186,33.169914',
            '40.181573,33.167383',
            '40.181314,33.165267',
            '40.180692,33.161307',
            '40.179595,33.159257',
            '40.180436,33.156803',
            '40.182323,33.154896',
            '40.184627,33.153811',
            '40.18531,33.15231',
            '40.184214,33.149579',
            '40.182647,33.147186',
            '40.181133,33.144316',
            '40.180299,33.141312',
            '40.181244,33.138789',
            '40.184494,33.135179',
            '40.189101,33.134165',
            '40.188644,33.121538',
            '40.190059,33.119765',
            '40.189538,33.117581',
            '40.188752,33.117716',
            '40.188649,33.116009',
            '40.189282,33.11137',
            '40.190329,33.111098',
            '40.191169,33.108711',
            '40.192742,33.105779',
            '40.190231,33.104205',
            '40.192066,33.101',
            '40.194525,33.101891',
            '40.196985,33.102168',
            '40.199078,33.102785',
            '40.199498,33.101421',
            '40.198455,33.096573',
            '40.199189,33.095277',
            '40.199297,33.091181',
            '40.199719,33.087155',
            '40.202415,33.088793',
            '40.202639,33.089008',
            '40.202648,33.088934',
            '40.20302,33.08163',
            '40.204279,33.077877',
            '40.204438,33.075215',
            '40.200773,33.076712',
            '40.200041,33.075687',
            '40.199886,33.071592',
            '40.198421,33.071727',
            '40.193865,33.074657',
            '40.193706,33.077455',
            '40.192712,33.077932',
            '40.192189,33.076157',
            '40.191875,33.076702',
            '40.188107,33.075947',
            '40.18837,33.074173',
            '40.187534,33.071579',
            '40.185073,33.072463',
            '40.183082,33.075327',
            '40.182036,33.074303',
            '40.181878,33.076009',
            '40.18057,33.075802',
            '40.179783,33.078464',
            '40.180252,33.080715',
            '40.178996,33.08085',
            '40.176432,33.080438',
            '40.175804,33.079277',
            '40.173344,33.080229',
            '40.17036,33.080021',
            '40.170414,33.077565',
            '40.168739,33.077904',
            '40.168372,33.079405',
            '40.166907,33.07879',
            '40.166487,33.079744',
            '40.164604,33.078718',
            '40.162981,33.078648',
            '40.16115,33.077145',
            '40.16047,33.077349',
            '40.156912,33.075504',
            '40.157176,33.070865',
            '40.156811,33.068272',
            '40.157232,33.065885',
            '40.154981,33.065884',
            '40.15273,33.065949',
            '40.152313,33.06322',
            '40.153465,33.062948',
            '40.153885,33.059879',
            '40.152891,33.059537',
            '40.152262,33.060628',
            '40.150118,33.057557',
            '40.150955,33.056944',
            '40.150119,33.054146',
            '40.149334,33.0536',
            '40.149074,33.051417',
            '40.146351,33.052233',
            '40.145149,33.05005',
            '40.146929,33.0478',
            '40.147767,33.04787',
            '40.149024,33.045892',
            '40.150594,33.045416',
            '40.153108,33.042484',
            '40.156301,33.041531',
            '40.157662,33.040713',
            '40.158657,33.03894',
            '40.158919,33.036689',
            '40.158606,33.035939',
            '40.156198,33.036006',
            '40.155831,33.036348',
            '40.151593,33.032252',
            '40.15018,33.029795',
            '40.148872,33.026862',
            '40.147251,33.02236',
            '40.145734,33.019017',
            '40.143169,33.01547',
            '40.140552,33.018743',
            '40.136208,33.012468',
            '40.134638,33.011445',
            '40.134219,33.014172',
            '40.133225,33.014787',
            '40.132492,33.016286',
            '40.129718,33.014376',
            '40.128043,33.014239',
            '40.127362,33.013149',
            '40.124274,33.011511',
            '40.121134,33.010557',
            '40.120663,33.005033',
            '40.118936,33.004556',
            '40.118046,33.001352',
            '40.117104,33.002034',
            '40.117052,32.999989',
            '40.117942,32.996103',
            '40.118099,32.993785',
            '40.11726,32.993716',
            '40.117156,32.991807',
            '40.114225,32.991808',
            '40.113962,32.988263',
            '40.113178,32.990171',
            '40.111189,32.988741',
            '40.110561,32.987513',
            '40.110612,32.982333',
            '40.109775,32.982333',
            '40.108884,32.982606',
            '40.108152,32.98097',
            '40.107419,32.98172',
            '40.106215,32.978653',
            '40.104069,32.978994',
            '40.104016,32.976949',
            '40.103179,32.975791',
            '40.102603,32.975996',
            '40.09784,32.974907',
            '40.098258,32.973612',
            '40.097053,32.97034',
            '40.09496,32.970205',
            '40.093494,32.968978',
            '40.092864,32.966934',
            '40.089914,32.96609',
            '40.08866,32.965392',
            '40.087289,32.965703',
            '40.086394,32.96384',
            '40.086395,32.963452',
            '40.085381,32.962444',
            '40.084785,32.96322',
            '40.083233,32.961357',
            '40.082934,32.957088',
            '40.082456,32.956934',
            '40.079415,32.957091',
            '40.077685,32.954608',
            '40.076042,32.954409',
            '40.073868,32.954145',
            '40.072856,32.957483',
            '40.072913,32.963208',
            '40.072249,32.963635',
            '40.071598,32.964343',
            '40.071285,32.964772',
            '40.071013,32.965268',
            '40.070613,32.966229',
            '40.071495,32.966984',
            '40.069795,32.973177',
            '40.069637,32.975594',
            '40.074055,32.979371',
            '40.07638,32.982475',
            '40.077038,32.985113',
            '40.075785,32.987831',
            '40.075304,32.98773',
            '40.06972,32.986574',
            '40.065681,32.983947',
            '40.065043,32.98533',
            '40.06026,32.983533',
            '40.060047,32.98547',
            '40.058667,32.985885',
            '40.053883,32.983811',
            '40.05282,32.984365',
            '40.049738,32.983397',
            '40.046443,32.98409',
            '40.046231,32.986994',
            '40.046975,32.987409',
            '40.048038,32.992663',
            '40.046975,32.99446',
            '40.047826,32.995706',
            '40.047507,32.999578',
            '40.04687,33.000685',
            '40.044637,33.002482',
            '40.044,33.004833',
            '40.04283,33.010918',
            '40.037621,33.019628',
            '40.038365,33.022394',
            '40.041127,33.025851',
            '40.045956,33.029463',
            '40.046122,33.029587',
            '40.045908,33.031385',
            '40.046866,33.031524',
            '40.048353,33.033737',
            '40.046971,33.035672',
            '40.046862,33.042448',
            '40.045374,33.043277',
            '40.04548,33.044107',
            '40.04718,33.044661',
            '40.04856,33.04812',
            '40.049197,33.051578',
            '40.051428,33.051717',
            '40.051613,33.052985',
            '40.05164,33.053239',
            '40.049408,33.055173',
            '40.04866,33.063747',
            '40.047168,33.069692',
            '40.040575,33.076046',
            '40.038979,33.078257',
            '40.03579,33.07853',
            '40.031537,33.080737',
            '40.030047,33.083639',
            '40.023775,33.085567',
            '40.02324,33.089574',
            '40.024087,33.094415',
            '40.026527,33.100639',
            '40.027687,33.11018',
            '40.030424,33.11733',
            '40.031221,33.121485',
            '40.033972,33.12564',
            '40.038173,33.128477',
            '40.041362,33.129615',
            '40.045127,33.133772',
            '40.045847,33.138301',
            '40.04845,33.143401',
            '40.04801,33.147927',
            '40.046699,33.152075',
            '40.046691,33.158489',
            '40.048575,33.158494',
            '40.049878,33.160383',
            '40.051184,33.159632',
            '40.05277,33.165673',
            '40.052036,33.171897',
            '40.053624,33.176807',
            '40.057387,33.180968',
            '40.059032,33.181686',
            '40.06086,33.185128',
            '40.062586,33.194002',
            '40.063298,33.201552',
            '40.060381,33.211166',
            '40.060804,33.217206',
            '40.064561,33.2242',
            '40.069342,33.226103',
            '40.073684,33.23008',
            '40.069577,33.252524',
            '40.071748,33.254231',
            '40.07203,33.257817',
            '40.070715,33.26253',
            '40.067665,33.264972',
            '40.067341,33.270287',
            '40.087864,33.28957',
            '40.0943,33.301106',
            '40.094014,33.305049',
            '40.094922,33.308757',
            '40.094551,33.310068',
            '40.095833,33.311151',
            '40.098484,33.314986',
            '40.103639,33.308796',
            '40.114469,33.307889',
            '40.121837,33.297164',
            '40.122851,33.295616',
            '40.123955,33.294424',
            '40.132216,33.293265',
            '40.131052,33.281784',
            '40.132162,33.278083',
            '40.132072,33.277245',
            '40.132808,33.276291',
            '40.134369,33.276059',
            '40.134462,33.275222',
            '40.137309,33.274277',
            '40.138594,33.274163',
            '40.142727,33.272745',
            '40.144376,33.273708',
            '40.144928,33.272993',
            '40.145744,33.2773',
            '40.149496,33.281262',
            '40.14986,33.282578',
            '40.150317,33.283537',
            '40.152059,33.283783',
            '40.152887,33.28295',
            '40.15426,33.284271',
            '40.153976,33.287977',
            '40.154424,33.292164',
            '40.154227,33.297664',
            '40.155611,33.300596',
            '40.160842,33.305134',
            '40.164209,33.306614',
            '40.168315,33.311636',
            '40.173273,33.313369',
            '40.176728,33.316618');
        $polygon['strokeColor'] = '#000099';
        $polygon['fillColor'] = '#000099';
        $this->googlemaps->add_polygon($polygon);

        $marker = array();
        $marker['position'] = '39.943945, 32.856148';
        $marker['draggable'] = true;
        $marker['icon'] = "/assets/backend/img/maps/marker-icon.png";
        $marker['ondragend'] = 'document.getElementById("us2-lat").value = event.latLng.lat();document.getElementById("us2-lon").value = event.latLng.lng();';
        $this->googlemaps->add_marker($marker);


        $data['map'] = $this->googlemaps->create_map();
        //    $this->load->view('admin/harita3', $data);
        $data['main_content'] = 'admin/proje/ekle';
        $this->load->view('admin/includes/template', $data);
    }
}