<?php


//echo 'dcd';


class Controller{
    public function __construct(){
    }
    public function model($m= null){
        if ($m != null) {
            require_once "../app/models/" . strtoupper($m)  . ".php";
            return new $m();
        }
    }
    public function has_string_keys( $array) {
        return count(array_filter(array_keys($array), 'is_string')) > 0;
    }
    public function view($view, $ext , ...$data){
        $ext = ($ext) ?? '.php';
        foreach ($data as $keys => $values) {
            foreach ((array)$values as $key => $v) {
                if (is_string($key)){
                    $$key = $v;
                }else if( is_numeric($key)){
                    //
                }else{
                    call_user_func($v);
                }
            }
        }
        $d = $data;
        if (isset($view)) {
            require_once "../app/views/" . $view . $ext ;
        }
    }
}















