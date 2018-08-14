<?php
namespace App\Helpers;

use App\Models\User;

class AppHelper 
{
    // just some random function - to call it from blade file -- testing purposes
    public function bladeHelper($value) {
        return "Increment $value";
    }

    // if need to debug query
    public function startQueryLog(){
        \DB::enableQueryLog();
    }

    // if need to execute queries
    public function showQueries(){
        dd(\DB::getQueryLog());
    }

    // for relename access in blade files
    // in use.
    public function getRoleName($id){
       echo User::findOrFail($id)->role['name'];
    }

    // for instance creation
    public static function instance() {
        return new AppHelper();
    }
}