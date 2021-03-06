<?php
/**
 * Created by PhpStorm.
 * User: xiangang
 * Date: 2017/9/21
 * Time: 下午4:15
 */

namespace simpleWebFrame\controller;


use simpleWebFrame\registry\ApplicationRegistry;
use simpleWebFrame\request\Request;

class InfoController extends Controller
{

    function dbInfo(Request $request)
    {
        // TODO: Implement doExecute() method.
        header("Content-Type:application/json; charset=utf-8");
        $info = ApplicationRegistry::getSystemInfo();

        print_r(json_encode($info));
    }

    function info(Request $request)
    {
        // TODO: Implement doExecute() method.
        header("Content-Type:application/json; charset=utf-8");
        $info = [
            "name" => "xiangang2",
            "age" => "25"
        ];

        print_r(json_encode($info));
    }

    function helloWorld(Request $request)
    {
        // TODO: Implement doExecute() method.
        header("Content-Type:application/json; charset=utf-8");
        $info = [
            "name" => "hello world",
            "age" => "25"
        ];

        print_r(json_encode($info));
    }

}