<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // opposite of fillable is guarded (don't fill these fields)
    protected $fillable = [
        'title', 'description', 'owner_id'
    ];
    
    // alternative to the previous
    // protected $guarded = [];

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    public function addTask($task){
        $this->tasks()->create($task);
    }
}
