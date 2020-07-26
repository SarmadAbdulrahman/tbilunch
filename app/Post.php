<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable=[
        'branches_id', 'action',
        'serviceType_id', 'username', 'email', 'phonenumber', 'date', 'av_count', 'cr_count'
  ];
}
