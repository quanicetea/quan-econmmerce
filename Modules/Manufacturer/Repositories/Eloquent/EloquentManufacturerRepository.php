<?php

namespace Modules\Manufacturer\Repositories\Eloquent;

use Modules\Manufacturer\Repositories\ManufacturerRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;

class EloquentManufacturerRepository extends EloquentBaseRepository implements ManufacturerRepository
{
    public function getData()
	{
		$manufacturers = $this->model->orderBy('id','DESC');
        return $manufacturers;
	}
}
