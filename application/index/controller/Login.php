<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
class Login extends Controller{
    public function index() {
        $request = request();
        if(count($request->param())>0) {
            $req_name = $request->param()['username'];
            $req_pass = $request->param()['password'];
            $result = Db::query('select uname, upass from am_account WHERE uname = :uname and upass = :upass',
            ['uname'=> $req_name, 'upass'=> $req_pass]);
            if($result) {
                Session::start();
                Session::set('uname', $req_name);
                return json(['code'=>1,'success'=>true]);
            }
        }
        return json(['code'=>0,'success'=>false]);
    }
}
