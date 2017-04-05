<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table ='barangs';
    protected $fillable = [
    'slug',
    'nama_barang',
    'id_user',
    'asal',
    'penjual',
    'harga',
    'kondisi',
    'sampul',
    'desc'
    ];
}
