<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
        'f_name','n_name','b_date','c_email','cont_1','cont_2','pro_pic','address','website',
    ];

    public $timestamps = false;
}
