<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;
use App\Services\TestBasicService;

/**
 * @method static  getOne()
 * @method static getTypes()
 * @method static getName()
 * @method static getAge()
 * @method static getSex()
 * @method static setName($name)
 * @method static setAge($age)
 * @method static setSex($sex)
 * @see \App\Services\TestBasicService
  */

class TestBasicServiceFacade  extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'service.test_basic';
    }
}
