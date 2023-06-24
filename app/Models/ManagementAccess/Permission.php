<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use SoftDeletes;

    // define table
    public $table = 'permission';

    // this fields must type date
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable
    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    public function permission_role()
    {
        return $this->hasMany('App\Models\ManagementAccess\PermissionRole', 'permission_id');
    }
}
