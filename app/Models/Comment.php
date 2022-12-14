<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Comment extends Model
{
    protected $fillable = [
        'content', 'team_id', 'user_id'
    ];
    public function team () {
        return $this->belongsTo(Team::class);
    }
    public function user () {
        return $this->belongsTo(User::class);
    }

    public $timestamps = false;

}
