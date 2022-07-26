<?php

namespace App\Services\Dogs;

class Bulldog implements Dog
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Pluto';
    }

    /**
     * @return string
     */
    public function age(): string
    {
        return '10 years';
    }

    /**
     * @return string
     */
    public function type():string
    {
        return 'Bulldog';
    }
}
