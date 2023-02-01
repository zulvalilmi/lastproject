<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahfidz extends Model
{
    use HasFactory;

    protected $fillable = [
        'kelasandorid_id',
        'ustadzah_id',
        'nama_tahfidz',
    ];

    public function kelasandorid()
    {
        return $this->belongsTo(Kelasandorid::class, 'kelasandorid_id', 'id');
    }

    public function ustadzah()
    {
        return $this->belongsTo(User::class, 'ustadzah_id', 'id');
    }

    public function setoran()
    {
        return $this->hasMany(Setoran::class, 'tahfidz_id', 'id');
    }
}
