<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use SoftDeletes;

    protected $table = 'jobs';

    protected $fillable = ['title','short_description','full_description','requirements','address','top_rated','salary','type_id','company_id','location_id'];

    public function type()
    {
    	return $this->belongsTo(JobType::class);
    }

    public function company()
    {
    	return $this->belongsTo(Company::class);
    }

    public function location()
    {
    	return $this->belongsTo(Location::class);
    }

    public function category()
    {
        return $this->belongsToMany(Category::class,'category_job');
    }
}
