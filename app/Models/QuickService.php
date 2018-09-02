<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuickService extends Model
{
    protected $fillable = [
        'service',
        'bedroom',
        'bathroom',
        'property',
        'postcode',
        'contact',
    ];
    public $dates = [
        'created_at','updated_at'
    ];

    public static function Persistent($data){
        return self::create($data);
    }
}
