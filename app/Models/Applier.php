<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','age','job_id','CV'
    ];

    public function job(){
        return $this->belongsTo(Job::class, 'job_id');
    }
}
