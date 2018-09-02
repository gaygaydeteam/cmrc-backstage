<?php
namespace app\index\controller;
use think\Controller;

class Api extends Controller{
    public function index() {
        $data = ['name'=>'thinkphp','url'=>'thinkphp.cn'];
        return json(['data'=>$data,'code'=>1,'message'=>'操作完成']);
    }
}
