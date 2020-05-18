<?php

namespace Modules\Category\Repositories\Eloquent;

use Modules\Category\Repositories\CategoryRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;

class EloquentCategoryRepository extends EloquentBaseRepository implements CategoryRepository
{
    public function getData()
	{
		$categories = $this->model->orderBy('id','DESC');
        return $categories;
	}
}
