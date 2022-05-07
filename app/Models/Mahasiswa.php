<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use HasFactory;
    use SoftDeletes;
    //fillabel = yang boleh diisi
    //guarded = tidak boleh diisi
    //fillable dan guarded tidak bisa dipakai bersamaan
    protected $guarded =[];
    // protected $fillable =['nim', 'nama', 'tanggal_lahir', 'ipk'];
}
