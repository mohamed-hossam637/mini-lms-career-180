<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'title', 'bio', 'linkedin_url', 'avatar_url'];

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
