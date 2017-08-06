<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       $this->display();
    }
     public function o(){
       $this->display('list');
    }
    public function t()
    {
    	$this->display('detail');
    }
    public function f()
    {
    	$this->display('login');
    }
    public function s()
    {
    	$this->display('register');
    }
}