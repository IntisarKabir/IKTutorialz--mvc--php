<?php


require_once '../app/core/Controller.php';

class Home extends Controller  {
    public function index($params){
        $m =  $params;
        $model =  $this->model('home');
        $this->view('home/index', null, 'dt'); // $m => $model->$m
    }
    public function test($mp='', ...$ep){
        //print_r($op);
        $params  = array_merge([$mp], $ep);
        $this->view('test/t1', '.php', $params);
    }
}
