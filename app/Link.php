<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *
     */
    protected $table = 'links';

    protected $fillable = [
        'id_user',
        'link',
        'code',
        'created_at',
        'updated_at'

    ];


}
