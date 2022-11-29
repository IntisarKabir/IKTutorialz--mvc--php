<?php
require_once '../app/core/Controller.php';

class Contact extends Controller {
    public function index($name = ''){  
        echo  $name;
    }
    public function phone($n='' ){
        echo 'contact over phone :' . $n ;
    }
    public function abc(...$p ){
        $props = ['z'=> 5];
        $y =3;
        $this->view('test/t1', null, $p , $y, $props);
    }
}






