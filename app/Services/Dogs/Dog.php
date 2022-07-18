<?php

namespace App\Services\Dogs;

interface Dog
{
    /**
     * @return string
     */
    public function name():string;

    /**
     * @return string
     */
    public function age():string;

    /**
     * @return string
     */
    public function type():string;
}
