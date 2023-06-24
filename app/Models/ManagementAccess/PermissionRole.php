<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
    use SoftDeletes;

    // define table
    public $table = 'permission_role';

    // this fields must type date
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable
    protected $fillable = [
        'permission_id',
        'role_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\ManagementAccess\Role', 'role_id', 'id');
    }

    public function permission()
    {
        return $this->belongsTo('App\Models\ManagementAccess\Permission', 'permission_id', 'id');
    }
}
