<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $table = 'pengajuan';
    protected $primaryKey = 'id_pengajuan';

    protected $fillable = [
        'id_warga',
        'jenis_surat',
        'tanggal_pengajuan',
        'status',
        'file_dokumen'
    ];

    public function warga()
    {
        return $this->belongsTo(Warga::class, 'id_warga');
    }

    public function surat()
    {
        return $this->hasOne(Surat::class, 'id_pengajuan');
    }
}
