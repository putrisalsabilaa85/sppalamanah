<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;
use Spatie\Permission\Traits\HasRoles;

class Spp extends Model
{
    use HasFactory, HasRoles;

    protected $table = 'spp';

    protected $fillable = [
    	'tahun',
    	'nominal',
    ];

    public function siswa()
    {
    	return $this->hasMany(Siswa::class);
    }
}
