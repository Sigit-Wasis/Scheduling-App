<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    /**
     * @variable $table is name table 
     */
    protected $table    ='classes';
    /**
     * @variable $fillable is field name table
     */
    protected $fillable = ['name', 'grade', 'type'];
}
