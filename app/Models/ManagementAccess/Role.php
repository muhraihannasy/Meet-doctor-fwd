<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    // define table
    public $table = 'role';

    // this fields must type date
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function role_user()
    {
        return $this->hasMany('App\Models\ManagementAccess\RoleUser', 'role_id');
    }

    public function permission_role()
    {
        return $this->hasMany('App\Models\ManagementAccess\PermissionRole', 'role_id');
    }
}
