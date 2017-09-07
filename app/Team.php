<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'team';
    
    protected $fillable = [
          'name',
          'position',
          'image'
    ];
    

    public static function boot()
    {
        parent::boot();

        Team::observe(new UserActionsObserver);
    }
    
    
    
    
}