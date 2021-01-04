<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    //use HasFactory;

	public function phone()
    {
        return $this->hasOne(Course::class);
    }
    

}
