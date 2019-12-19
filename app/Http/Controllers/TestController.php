<?php

namespace App\Http\Controllers;

use App\Facades\TestBasicServiceFacade;
use Illuminate\Http\Request;
use App\Services\TestBasicService;
use App\Models\Test;

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
    public function method77(request $request){
        return response()->json(\App\Test::lookForId($request->get('id'))); //
    }
    public function method79(request $request){
        return response()->json(\App\Test::lookForId($request->get('id'))); //
    }

}


