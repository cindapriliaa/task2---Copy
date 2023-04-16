<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;
    protected $table = 'pengeluaran';
    protected $fillable = [
        'tanggal',
        'kategori',
        'catatan',
        'deskripsi',
    ];
    public function pengeluaran()
    {
        return $this->belongsTo(PengeluaranModel::class, 'id_pengeluaran');
    }
}