<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubProfil extends Model
{
    use HasFactory;

    protected $table = 'subprofils';

    protected $fillable = ['penjelasan', 'gambar'];
}
