<?php

namespace App;

use App\Mail\ProjectCreated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Project extends Model
{
    // opposite of fillable is guarded (don't fill these fields)
    protected $fillable = [
        'title', 'description', 'owner_id'
    ];

    public static function boot(){
        parent::boot();

        static::created(function ($project){
            Mail::to($project->owner->email)->send(
            new ProjectCreated($project)
        );

        });

    }
    
    // alternative to the previous
    // protected $guarded = [];

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    public function addTask($task){
        $this->tasks()->create($task);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
