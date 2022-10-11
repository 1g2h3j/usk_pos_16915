<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_transaksi';
    protected $fillable = [
        'id_transaksi',
        'id_user',
        'tgl_transaksi',
        'total_bayar',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
