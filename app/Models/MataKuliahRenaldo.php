<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliahRenaldo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mata_kuliah_renaldos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['kode_mataKuliah', 'nama_mataKuliah', 'sks'];

    
}
