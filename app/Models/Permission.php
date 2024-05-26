<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;
use MongoDB\Laravel\Relations\BelongsToMany;

class Permission extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = 'permissions';

    protected $guarded = ['id'];

    public function roles(): BelongsToMany
    {
        //return $this->belongsToMany(Role::class);
        //return $this->belongsToMany(Role::class, null, 'role_ids', 'permission_ids');
        return $this->belongsToMany(Role::class);
    }
}
