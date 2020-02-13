<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $fillable = array('nama', 'email', 'alamat', 'gender');

    public $timestamps = true;
}
?>