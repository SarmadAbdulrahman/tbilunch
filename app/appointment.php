<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    //

    protected $fillable=[
        'branches_id', 'date', 'av_count', 'cr_count','service_id'
  ];
}
