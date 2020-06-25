<?php 
namespace Modules\Site\Http\ViewComposers;

use Illuminate\View\View;
// use Modules\Category\Repositories\CategoryRepository;
use Modules\Category\Entities\Category;
use Modules\Manufacturer\Entities\Manufacturer;
use Auth;
class DefineComposer
{
  public function compose(View $view)
  {
    $categories = Category::all();
    $manufacturers = Manufacturer::all();
    $view->with('categories', $categories);
    $view->with('manufacturers',$manufacturers);
    $user = Auth::user();
    if($user!=null){
      $view->with('user',$user);
    }
  }
}