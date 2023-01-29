<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    protected $table = 'departements';
    protected $primaryKey = 'no';
    public $timestamps = false;
    protected $fillable = ['no', 'nom'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function getNomAttribute($value)
    {
        return ucfirst($value);
    }
}
