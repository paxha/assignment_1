<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function units(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Unit::class)->withTimestamps();
    }

    public function workshops(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Workshop::class)->withTimestamps();
    }

    public function assessments(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Assessment::class)->withPivot(['submitted_date', 'days_extension_given', 'marks_awarded'])->withTimestamps();
    }
}
