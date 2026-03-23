<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    //
    protected $fillable = [
        'siteName',
        'contactEmail',
        'contactPhone',
        'officeAddress',
        'title',
        'subtitle'
    ];
}
