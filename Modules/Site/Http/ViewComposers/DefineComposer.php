<?php 
namespace Modules\Site\Http\ViewComposers;

use Illuminate\View\View;
// use Modules\Category\Repositories\CategoryRepository;
use Modules\Category\Entities\Category;

class DefineComposer
{
  public function compose(View $view)
  {
    $categories = Category::all();
    $view->with('categories', $categories);
  }
}