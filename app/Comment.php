<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $table='comment';

    /**
     * Get the user that authored the post.
     */
    public function post()
    {
        return $this->belongsTo('App\Post','post_id');
    }




}
