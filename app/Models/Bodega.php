<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'localizacion', 'telefono', 'email', 'dispone'];

    public function vinos() {
        return $this->hasMany(Vino::class);
    }
}
