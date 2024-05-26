<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;
use MongoDB\Laravel\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';

    protected $collection = 'roles';

    protected $guarded = ['id'];

    public function permissions(): BelongsToMany
    {
        //return $this->belongsToMany(Permission::class);
        //return $this->belongsToMany(Permission::class, 'role_permissions', 'permission_id', 'role_id');
        //return $this->belongsToMany(Permission::class, null);
        return $this->belongsToMany(Permission::class);
        //return $this->belongsToMany(Permission::class);
    }
}
