<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $judul
 * @property string $deskripsi
 * @property string $created_at
 * @property string $updated_at
 */
class alur extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'alur';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['judul', 'deskripsi', 'created_at', 'updated_at'];

}
