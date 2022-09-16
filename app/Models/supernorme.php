<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class supernorme extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'supernormes';

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
    protected $fillable = ['IC', 'Code_NM', 'Version_ NM', 'Titre', 'Origine', 'Version_Originale'];

    
}
