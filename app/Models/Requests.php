<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    use HasFactory;
    public function job() {
        return $this->belongsTo(Jobad::class, 'job_id', 'id');
    }
 
}
