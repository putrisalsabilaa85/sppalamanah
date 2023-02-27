<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Spp;
use App\Models\Petugas;
use App\Models\Pembayaran;
use Spatie\Permission\Traits\HasRoles;

class Siswa extends Model
{
    use HasFactory, HasRoles;

    protected $table = 'siswa';

    protected $fillable = [
        'user_id',
    	'kode_siswa',
    	'nisn',
    	'nis',
    	'nama_siswa',
        'jenis_kelamin',
    	'alamat',
    	'no_telepon',
    	'kelas_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function petugas()
    {
        return $this->belongsTo(Petugas::class);
    }

    public function spp()
    {
        return $this->belongsTo(Spp::class);
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class);
    }
}
