<?php

namespace axioTake\LaravelRoles\Traits;

use Illuminate\Support\Str;

trait Slugable
{
    /**
     * Set name attribute.
     *
     * @param string $value
     * @return void
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = Str::slug($value, config('roles.separator'));
    }
}
