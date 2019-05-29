<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//定义hello类控制器，有一个index方法，ci支持的URL模式默认为pathinfo，使用/隔开
//类文件名小写，名字和类一致
class Hello extends CI_Controller{
	public function index(){
		//echo "hello"; 
		$data['title']='ci框架';
		$data['content']='ci框架是一个小巧的PHP框架'; 
		$this->load->view('hello.html',$data);  //载入视图文件，在控制器中调用视图
	}

}