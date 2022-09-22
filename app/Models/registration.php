<?php

namespace App\Models;

use App\Models\Traits\TraitUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class registration extends Model
{
    use HasFactory, SoftDeletes, TraitUuid;
    
    protected $table = 'registrations';

    protected $keyType = 'string';
    public $timestamps = true;
    public $incrementing = false;

    protected $fillable = [
        'student_id',
        'course_id',
    ];
}
