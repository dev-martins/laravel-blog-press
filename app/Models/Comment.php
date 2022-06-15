<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function allComments()
    {
        return $this->all();
    }

    public function store($request)
    {
        return $this->create($request->input());
    }
}
