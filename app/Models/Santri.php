<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
    ];

    public function setoran()
    {
        return $this->belongsTo(Setoran::class,'surat_murojaah','id');
    }
}
