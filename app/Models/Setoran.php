<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setoran extends Model
{
    use HasFactory;

    protected $fillable = [
        'santri_id',
        'tahfidz_id',
        'surat_ziyadah',
        'ayat_ziyadah',
        'surat_murojaah',
        'ayat_murojaah',
        'total_hafalan',
    ];

    public function tahfidz()
    {
        return $this->belongsTo(Tahfidz::class,'tahfidz_id','id');
    }

    public function santri()
    {
        return $this->belongsTo(User::class,'santri_id','id');
    }
}
