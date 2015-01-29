<?php
namespace controllers;

use core\View;
use helpers\Simplecurl as Curl;
class Helloworld extends \core\Controller
{
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        //*** Set Data
        $data = array(
            'title' => 'FuelPHP Training',
            'header' => 'Header',
            'content' => 'Content',
            'footer' => 'Footer',
        );
        //*** Call Database
        $model = new \models\Posts();
        $data['posts'] = $model->get_post();
        
        //*** Call View
        View::render('myview/index', $data);
    }
    
    public function get_curl() {
        $url = 'https://bibles.org/eng-KJV/John/13';
        $data = Curl::get($url);
        
        var_dump($data);
    }
}
