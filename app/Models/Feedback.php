<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    
    protected $fillable = ['title','description','category', 'user_id'];
    
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function Comment()
    {
        return $this->hasMany(Comment::class, 'feed_id');
    }

}
