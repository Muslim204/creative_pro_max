<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function leads(){
        return $this->hasMany(Lead::class);
    }
}
