<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Norme extends Model
{
    use HasFactory;
    protected $fillable=['ic','code_nm','version_nm','titre','origine','version_originale'];
    protected $table="normes";
    public $timestamps = false;


}