<?php

namespace Modules\Manufacturer\Events\Handlers;

use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Modules\Core\Events\BuildingSidebar;
use Modules\User\Contracts\Authentication;

class RegisterManufacturerSidebar implements \Maatwebsite\Sidebar\SidebarExtender
{
    /**
     * @var Authentication
     */
    protected $auth;

    /**
     * @param Authentication $auth
     *
     * @internal param Guard $guard
     */
    public function __construct(Authentication $auth)
    {
        $this->auth = $auth;
    }

    public function handle(BuildingSidebar $sidebar)
    {
        $sidebar->add($this->extendWith($sidebar->getMenu()));
    }

    /**
     * @param Menu $menu
     * @return Menu
     */
    public function extendWith(Menu $menu)
    {
        $menu->group(trans('core::sidebar.content'), function (Group $group) {
            $group->item(trans('manufacturer::manufacturers.title.manufacturers'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(0);
                $item->route('admin.manufacturer.manufacturer.index');
                $item->authorize(
                     /* append */
                     $this->auth->hasAccess('manufacturer.manufacturers.index') or $this->auth->hasAccess('unit.units.index') or $this->auth->hasAccess('category.categories.index')
                );
                // $item->item(trans('manufacturer::manufacturers.title.manufacturers'), function (Item $item) {
                //     $item->icon('fa fa-copy');
                //     $item->weight(0);
                //     // $item->append('admin.manufacturer.manufacturer.create');
                //     $item->route('admin.manufacturer.manufacturer.index');
                //     $item->authorize(
                //         $this->auth->hasAccess('manufacturer.manufacturers.index')
                //     );
                // });
// append
                // $item->item(trans('unit::units.title.units'), function (Item $item) {
                //     $item->icon('fa fa-copy');
                //     $item->weight(0);
                //     // $item->append('admin.unit.unit.create');
                //     $item->route('admin.unit.unit.index');
                //     $item->authorize(
                //         $this->auth->hasAccess('unit.units.index')
                //     );
                // });

                // $item->item(trans('category::categories.title.categories'), function (Item $item) {
                //     $item->icon('fa fa-copy');
                //     $item->weight(0);
                //     // $item->append('admin.category.category.create');
                //     $item->route('admin.category.category.index');
                //     $item->authorize(
                //         $this->auth->hasAccess('category.categories.index')
                //     );
                // });
            });
        });

        return $menu;
    }
}
