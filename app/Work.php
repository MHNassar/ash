<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Work extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'work';
    
    protected $fillable = [
          'title',
          'body',
          'image'
    ];
    

    public static function boot()
    {
        parent::boot();

        Work::observe(new UserActionsObserver);
    }
    
    
    
    
}