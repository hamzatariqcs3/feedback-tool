<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['content','status','feed_id', 'user_id'];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function feedback()
    {
        return $this->belongsTo(Feedback::class, 'feed_id');
    }
}
