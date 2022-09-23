<?php

namespace App\Models;

use App\Models\Traits\TraitUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class course extends Model
{
    use HasFactory, SoftDeletes, TraitUuid;
    
    protected $table = 'courses';

    protected $keyType = 'string';
    public $timestamps = true;
    public $incrementing = false;

    protected $fillable = [
        'title',
        'description',
    ];
    public function student()
    {
        return $this->belongsToMany(student::class,'registrations','course_id','student_id')
        ->using(registration::class)
        ->withTimestamps();
    }
}
