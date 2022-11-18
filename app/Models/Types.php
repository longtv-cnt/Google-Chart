<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    protected $table = 'types';
    protected $fillable = ['name'];
    public function houses()
    {
        return $this->hasMany('App\Models\Houses', 'type_id', 'id');
    }
    use HasFactory;
}
