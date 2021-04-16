<?php

namespace think\composer;

class Promise
{
    public function then($callable)
    {
        $callable();
    }
}
