<?php

namespace Modules\Unit\Repositories\Eloquent;

use Modules\Unit\Repositories\UnitRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;

class EloquentUnitRepository extends EloquentBaseRepository implements UnitRepository
{
    public function getData()
	{
		$units = $this->model->orderBy('id','DESC');
        return $units;
	}
}
