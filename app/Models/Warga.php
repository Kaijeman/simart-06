<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table = 'warga';
    protected $primaryKey = 'id_warga';

    protected $fillable = [
        'nik',
        'nama',
        'no_hp',
        'email',
        'password'
    ];

    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class, 'id_warga');
    }
}
