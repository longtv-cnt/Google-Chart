<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Houses extends Model
{
    protected $table = 'houses';
    protected $fillable = ['name', 'address', 'price', 'image', 'description', 'type_id'];
    public function types()
    {
        return $this->belongsTo('App\Models\Types', 'type_id', 'id');
    }
    use HasFactory;
}
