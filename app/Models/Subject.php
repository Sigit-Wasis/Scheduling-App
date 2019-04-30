<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $timestamps = false;
    /**
     * @variable $table is name table 
     */
    protected $table = "subjects";

    /**
     * @variable $fillable is field name table
     */
    protected $fillable = [
        'subject', 'code'
    ];
}
