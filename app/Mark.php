<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $fillable = [
        'php', 'mySQL','java'.'student_id'
    ];
 
    public function student(){
        return $this->belongsTo('App\Student', 'student_id');
    }
}
