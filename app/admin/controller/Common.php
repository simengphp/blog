<?php
/**
 * create by simengphp
 * website www.simengphp.com
 * QQ 476319748 (备注设计模式)
 * Date: 2017/11/23
 * Time: 11:31
 */
namespace app\admin\controller;
use think\Controller;
use think\Request;

class Common extends Controller
{

    public function __construct(Request $request)
    {
        parent::__construct($request);
    }
}