<?php

namespace App;

use App\Package;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable =
    [
        'package_id',
        'name',
        'sub_heading',
        'sub_heading_description',
        'description',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
