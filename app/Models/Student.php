<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id',
        'surname',
        'name',
    ];

    protected $casts = [
        'group_id' => 'integer',
    ];
    
    public function group()
    {
        // Студент может принадлежать к одной группе.
        return $this->belongsTo(Group::class);
    }
}