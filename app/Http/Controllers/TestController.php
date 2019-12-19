<?php

namespace App\Http\Controllers;

use App\Facades\TestBasicServiceFacade;
use Illuminate\Http\Request;
use App\Services\TestBasicService;

class TestController extends Controller
{
    private $a;
    public function __construct(TestBasicService $a)
    {
        $this->a = $a;
    }

    public function  getOne () {
        TestBasicServiceFacade::setName('Vladimir');
        TestBasicServiceFacade::setAge(33);
        TestBasicServiceFacade::setSex(true);
        return response()->json(TestBasicServiceFacade::getOne());
    }
    public function  setOne (request $request)
    {
        TestBasicServiceFacade::setName($request->get('name'));
        TestBasicServiceFacade::setAge($request->get('age'));
        TestBasicServiceFacade::setSex($request->get('sex'));
        return response()->json(TestBasicServiceFacade::getOne());
    }
}


