<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //
    protected $fillable =
    [
        'name',
        'description',
        'meta-description',
        'meta-keywords',
        'slug',

    ];

    public function services()
    {
        return $this->hasMany('App\Service');
    }

}
