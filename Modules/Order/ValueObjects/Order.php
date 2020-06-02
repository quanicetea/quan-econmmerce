<?php

namespace Modules\Order\ValueObjects;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Embeddable */
class Order
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
