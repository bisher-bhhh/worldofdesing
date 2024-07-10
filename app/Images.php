<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images';
    protected $fillable = ['project_id', 'file_name', 'file_path'];

    public function works()
    {
        return $this->belongsTo(Works::class);
    }
}
