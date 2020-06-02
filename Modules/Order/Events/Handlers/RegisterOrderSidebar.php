<?php

namespace Modules\Order\Events\Handlers;

use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Modules\Core\Events\BuildingSidebar;
use Modules\User\Contracts\Authentication;

class RegisterOrderSidebar implements \Maatwebsite\Sidebar\SidebarExtender
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
            $group->item(trans('order::orders.title.orders'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(10);
                $item->route('admin.order.order.index');
                $item->authorize(
                     /* append */
                     $this->auth->hasAccess('order.orders.index')
                );
                // $item->item(trans('order::orders.title.orders'), function (Item $item) {
                //     $item->icon('fa fa-copy');
                //     $item->route('admin.order.order.index');
                //     $item->weight(10);
                //     $item->authorize(
                //         $this->auth->hasAccess('order.orders.index')   
                //     );
                // });
                // $item->item(trans('order::orderdetails.title.orderdetails'), function (Item $item) {
                //     $item->icon('fa fa-copy');
                //     $item->weight(11);
                //     $item->route('admin.order.orderdetail.index');
                //     $item->authorize(
                //         $this->auth->hasAccess('order.orderdetails.index')
                //     );
                // });
// append


            });
        });

        return $menu;
    }
}
