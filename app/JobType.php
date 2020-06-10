<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobType extends Model
{
    use SoftDeletes;
	
    protected $table = 'job_types';

    protected $fillable = ['name'];

    public function job()
    {
        return $this->hasMany(Job::class);
    }
}
