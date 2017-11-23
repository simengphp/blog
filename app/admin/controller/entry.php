<?php
/**
 * create by simengphp
 * website www.simengphp.com
 * QQ 476319748 (备注设计模式)
 * Date: 2017/11/23
 * Time: 11:28
 */
namespace app\admin\controller;

use think\Request;

class Entry extends Common
{
    public function login(Request $request)
    {
        
        return $this->fetch("login");
    }
}