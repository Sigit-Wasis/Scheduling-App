<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
	/**
     * @variable $fillable is field name table
     */
    protected $fillable = ['code', 'name_id', 'name_ar', 'nip', 'gender'];  
}
