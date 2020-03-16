<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'category_id', 'user_id', 'order'
    ];

    /**
     * Each task has one category
     */
    public function category() {
        return $this->hasOne(Category::class);
    }

    /**
     * Each task belongs to one user
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}
