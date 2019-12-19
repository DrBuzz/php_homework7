<?php
namespace App\Services;
use Illuminate\Http\Request;
class TestOne {
    public $name, $age, $sex;
}

class TestBasicService
{

    private $b;

    public function __construct(TestOne $b)
    {
        $this->b = $b;
    }

public function getOne(){
$array = ["name" => $this->b->name, "age" => $this->b->age,  "sex" => $this->b->sex];
return $array;
}
public function getTypes(){
$array = ["name" => "string", "age" => "int",  "sex" => "bool"];
return $array;
}
public function getName(){
return $this->b->name;
}
public function getAge(){
return $this->b->age;
}
public function getSex(){
return $this->b->sex;
}
public function setName($name){
$this->b->name=$name;
}
public function setAge($age){
$this->b->age=$age;
}
public function setSex($sex){
$this->b->sex=$sex;
}

}
