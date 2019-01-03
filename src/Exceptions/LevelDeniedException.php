<?php

namespace axioTake\LaravelRoles\Exceptions;

class LevelDeniedException extends AccessDeniedException
{
    /**
     * Create a new level denied exception instance.
     *
     * @param string $level
     */
    public function __construct($level)
    {
        $this->message = sprintf(__("You don't have a required [%s] level."), $level);
    }
}
