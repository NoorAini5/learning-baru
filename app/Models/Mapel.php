<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class Mapel extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'mapels';
    protected $fillable = ['nama','kelas_id','guru','deskripsi'];
    public $timestamps = false;

    public function Kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
    public function Guru()
    {
        return $this->belongsTo(Guru::class, 'guru');
    }
    public function Materi()
    {
        return $this->hasmany(Materi::class, 'materi');
    }
    public function Tugas()
    {
        return $this->hasmany(Tugas::class, 'tugas');
    }
    public function Ujian()
    {
        return $this->hasmany(Ujian::class, 'ujian');
    }
    public function Diskusi()
    {
        return $this->hasMany(Diskusi::class, 'diskusi');
    }

}
