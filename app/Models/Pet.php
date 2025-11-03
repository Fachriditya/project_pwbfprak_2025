<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'pet';
    protected $primaryKey = 'idpet';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'idras_hewan',
        'idpemilik',
        'tanggal_lahir',
        'jenis_kelamin',
        'warna_tanda'
    ];

    public function rasHewan()
    {
        return $this->belongsTo(RasHewan::class, 'idras_hewan');
    }

    public function pemilik()
    {
        return $this->belongsTo(Pemilik::class, 'idpemilik');
    }

    public function jenisHewan()
    {
        return $this->hasOneThrough(
            JenisHewan::class,
            RasHewan::class,
            'idras_hewan',
            'idjenis_hewan',
            'idras_hewan',
            'idjenis_hewan'
        );
    }
}