<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'instructor_id',
        'category_id',
        'ratings',
        'level_id',
        'is_featured',
        'who_takes_this_course',
    ];

    protected function casts(): array
    {
        return [
            'is_featured' => 'boolean',
            'ratings' => 'decimal:2',
        ];
    }

    /**
     * Get the who_takes_this_course attribute.
     * Always returns a simple array for consistency.
     * The form will handle conversion to Repeater format.
     */
    public function getWhoTakesThisCourseAttribute($value)
    {
        // Handle null or empty values
        if ($value === null || $value === '') {
            return [];
        }

        // If it's a JSON string, decode it first
        if (is_string($value)) {
            $decoded = json_decode($value, true);
            if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                $value = $decoded;
            } else {
                return [];
            }
        }

        // Ensure it's an array
        if (!is_array($value)) {
            return [];
        }

        // If it's in Repeater format (array of objects with 'item' key), extract values
        if (isset($value[0]) && is_array($value[0]) && isset($value[0]['item'])) {
            return array_values(array_filter(array_map(fn($item) => $item['item'] ?? null, $value)));
        }

        // Return as simple array
        return array_values($value);
    }

    /**
     * Set the who_takes_this_course attribute.
     * Transform from Repeater format to simple array for storage.
     * The array cast will handle JSON encoding automatically.
     */
    public function setWhoTakesThisCourseAttribute($value)
    {
        if (empty($value)) {
            $this->attributes['who_takes_this_course'] = null;
            return;
        }

        // If it's in Repeater format (array of objects with 'item' key), extract values
        if (is_array($value) && isset($value[0]) && is_array($value[0]) && isset($value[0]['item'])) {
            $this->attributes['who_takes_this_course'] = json_encode(
                array_values(array_filter(array_map(fn($item) => $item['item'] ?? null, $value)))
            );
            return;
        }

        // If it's already a simple array, let the cast handle it
        $this->attributes['who_takes_this_course'] = is_array($value) ? json_encode($value) : $value;
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
