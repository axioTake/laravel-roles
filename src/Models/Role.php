<?php

namespace axioTake\LaravelRoles\Models;

use Illuminate\Database\Eloquent\Model;
use axioTake\LaravelRoles\Contracts\RoleHasRelations as RoleHasRelationsContract;
use axioTake\LaravelRoles\Traits\RoleHasRelations;
use axioTake\LaravelRoles\Traits\Slugable;

class Role extends Model implements RoleHasRelationsContract
{
    use Slugable, RoleHasRelations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'level'];

    /**
     * Create a new model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        if ($connection = config('roles.connection')) {
            $this->connection = $connection;
        }
    }
}
