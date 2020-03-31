<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'image', 'user_id',
    ];

    /**
     * Get relations with Users table
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
}
