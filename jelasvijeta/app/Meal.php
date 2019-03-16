<?php

namespace App;

use Dimsav\Translatable\Translatable; 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meal extends Model
{
    use SoftDeletes;

    use Translatable; 

   // 3. To define which attributes needs to be translated
    public $translatedAttributes = ['title','description'];
}
