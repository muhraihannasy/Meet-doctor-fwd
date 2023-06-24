<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use SoftDeletes;

    // define table
    public $table = 'doctor';

    // this fields must type date
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable
    protected $fillable = [
        'specialist_id',
        'name',
        'fee',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function specialist()
    {
        return $this->belongsTo('App\Models\MasterData\Specialist', 'specialist_id', 'id');
    }

    public function appoinment()
    {
        return $this->hasMany('App\Models\Operational\Appoinment', 'doctor_id');
    }
}
