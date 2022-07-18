<?php

namespace App\Services\Dogs;

class Kolli implements Dog
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'Naida';
    }

    /**
     * @return string
     */
    public function age(): string
    {
        return '5 year';
    }

    /**
     * @return string
     */
    public function type(): string
    {
        return 'Kolli';
    }
}
