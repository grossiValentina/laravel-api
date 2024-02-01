<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    
    protected $fillable = ['titolo', 'descrizione', 'slug'];

    public function setTitoloAttribute($_titolo){
        $this->attributes['titolo'] = $_titolo;
        $this->attributes['slug'] = Str::slug($_titolo);
    }

    public function technologies() {
        return $this->belongsToMany(Technology::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
