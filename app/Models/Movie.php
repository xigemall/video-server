<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-05-24
 * Time: 17:19
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function getImgAttribute($value)
    {
        return config('app.url').$value;
    }

    public function getSourceAttribute($value)
    {
        return config('app.url').$value;
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}