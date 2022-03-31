<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Guru extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'gurus';
    protected $fillable = ['nama','alamat','agama','jenis_kelamin','telepon','email'];
    public $timestamps = false;

    public function Mapel()
    {
        return $this->hasMany(Mapel::class);
    }
}
