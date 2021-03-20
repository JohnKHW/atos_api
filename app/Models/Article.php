<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'title', 'content', 'isReply', 'isHidden'];

    protected $appends = ['isOwner'];

    public function getIsOwnerAttribute()
    {
        return $this->user_id == Auth::id();
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($query) {
            $query->user_id = Auth::id();
        });
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
