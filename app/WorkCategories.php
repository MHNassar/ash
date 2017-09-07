<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class WorkCategories extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'workcategories';
    
    protected $fillable = ['name'];
    

    public static function boot()
    {
        parent::boot();

        WorkCategories::observe(new UserActionsObserver);
    }
    
    
    
    
}