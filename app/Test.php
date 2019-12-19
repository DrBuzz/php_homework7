<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// php artisan db:seed --class=TestsTableSeeder

class Test extends Model
{
    protected $fillable = ['text','is_enabled'];
    protected $casts = ['is_enabled' => 'boolean'];

    public static function findMax() {
        $maxId = Test::all()->max('id');
        Test::where('id', $maxId)->update(['text' => 'So what about Pepito?', 'is_enabled' => 1]);
        return $maxId;
    }
    public static function lookForId($p){
        $a = Test::where('id', $p)->get();
        if (!$a) { return $a; }
        else { return null; }
    }
}
