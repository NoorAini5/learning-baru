<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Materi extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'materis';
    protected $fillable = ['nama','isi','matkul'];
    public $timestamps = false;

    public function setNamaAttribute($value)
    {
        return $this->attributes['nama'] = Str::ucfirst($value);
    }

    public function scopeActive($query)
    {
        return $query->where('status', static::ACTIVE);
    }

    public function pendaftar()
    {
        return $this->hasMany(Pendaftar::class);
    }
}
