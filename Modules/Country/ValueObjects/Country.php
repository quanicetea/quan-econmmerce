<?php

namespace Modules\Country\ValueObjects;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Embeddable */
class Country
{
    public function __construct()
    {
        // Implement stub method
    }

    public function __toString()
    {
        return ''; // Implement stub method
    }
}
