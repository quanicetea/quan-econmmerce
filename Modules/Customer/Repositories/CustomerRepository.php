<?php

namespace Modules\Customer\Repositories;

use Modules\Core\Repositories\BaseRepository;
use Illuminate\Http\Request;

interface CustomerRepository extends BaseRepository
{
    public function createCustomer(array $request);
    public function updateCustomer(array $request);
    public function getData();
}
