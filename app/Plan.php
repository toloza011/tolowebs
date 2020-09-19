<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table= "planes";
    protected $primaryKey="id";
    protected $fillable=['id','nombre','descripcion','precio'];
    
}
