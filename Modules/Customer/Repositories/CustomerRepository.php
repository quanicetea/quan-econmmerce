<?php

namespace Modules\Customer\Repositories;

use Modules\Core\Repositories\BaseRepository;
use Illuminate\Http\Request;

interface CustomerRepository extends BaseRepository
{
    public function createCustomer(Request $request);
}
