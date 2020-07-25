<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

       $this->Display();
     }

    public function live(){
        if ($_GET['room'] == 01){
            //给前端直播源

                $arr[] = array('url'=>'http://live.yici.info:8080/hls/test.m3u8');//需要修改域名

            $this->assign('pic',$arr);
            $this->Display();
        }
        if ($_GET['room'] == 02){
            $arr[] = array('url'=>'http://live.yici.info:8080/hls/wu.m3u8');//需要修改域名

            $this->assign('pic',$arr);
            $this->Display();
        }
    }
    /*判断用户是否存在*/
    public function livepss(){
        $user = $_GET['user'];
        $pass = $_GET['pass'];
        if( $user || $pass)
        {
            
            $dbuser = M('user')->where(array('name'=>$user))->find();
            if(!empty($dbuser)){
                
                if($dbuser['name']==$user || $dbuser['pass']==$pass){
                }else{
                   header('HTTP/1.0 404 NOT FOUND');   
                }
                
            }else{
                header('HTTP/1.0 404 NOT FOUND');  
            }
           
        }else{
          header('HTTP/1.0 404 NOT FOUND');  
        }
        
    }
}