<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sensors extends Model
{

    protected $fillable = array('mac', 'suhu', 'kelembaban', 'volt', 'amper', 'watt', 'kwh', 'hertz', 'pff');

    public $timestamps = true;
}
?>