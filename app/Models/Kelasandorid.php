<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelasandorid extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kelas',
        'slug',
    ];

    public function tahfidz()
    {
        return $this->hasMany(Tahfidz::class, 'kelasandorid_id', 'id');
    }

}
