<?php

namespace Modules\Product\Repositories;

use Modules\Core\Repositories\BaseRepository;

interface ProductRepository extends BaseRepository
{
    public function getData($request);
    public function getNewProducts();
    public function searchProducts($request);
}
