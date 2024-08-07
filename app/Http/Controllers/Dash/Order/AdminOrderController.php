<?php

namespace App\Http\Controllers\Dash\Order;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Models\Notification;

class AdminOrderController extends Controller
{
    //

    public function newOrders(){

        $page_title = __('messages.orders_new');
        $body_title = __('messages.orders_new');
        $breadcrumbs = 'admin.orders.new';

        Notification::where('notifiable_type','=','App\Models\Order')->update(['read_at' => now()]);
        $orders = Order::where('order_status',1)->where('delivery_status',0)->paginate(20);

        return view('admin.orders.index')
            ->with(['orders' => $orders ,
                   'page_title' => $page_title ,
                   'body_title' => $body_title,
                   'breadcrumbs' => $breadcrumbs]);


    }
    public function sending(){

        $page_title = __('messages.orders_sending');
        $body_title = __('messages.orders_sending');
        $breadcrumbs = 'admin.orders.sending';
        $orders = Order::where('order_status',1)->where('delivery_status',1)->paginate(20);
        return view('admin.orders.index')->with(['orders' => $orders ,
            'page_title' => $page_title ,
            'body_title' => $body_title,
            'breadcrumbs' => $breadcrumbs]);
    }

    public function paid(){

        $page_title = __('messages.orders_paid');
        $body_title = __('messages.orders_paid');
        $breadcrumbs = 'admin.orders.paid';
        $orders = Order::where([['payment_status',1],['delivery_status',2],['order_status',1]])->paginate(20);
        return view('admin.orders.index')->with(['orders' => $orders ,
            'page_title' => $page_title ,
            'body_title' => $body_title,
            'breadcrumbs' => $breadcrumbs]);
    }

    public function unpaid(){

        $page_title = __('messages.orders_unpaid');
        $body_title = __('messages.orders_unpaid');
        $breadcrumbs = 'admin.orders.unpaid';
        $orders = Order::where([['order_status',0],['payment_status',0]])->paginate(20);
        return view('admin.orders.index')->with(['orders' => $orders ,
            'page_title' => $page_title ,
            'body_title' => $body_title,
            'breadcrumbs' => $breadcrumbs]);
    }

    // public function canceled()
    // {
    //     $page_title = __('messages.orders_canceled');
    //     $body_title = __('messages.orders_canceled');
    //     $breadcrumbs = 'admin.orders.canceled';
    //     $orders = Order::where('order_status',4)->paginate(20);
    //     return view('admin_end.orders.index')->with(['orders' => $orders ,
    //         'page_title' => $page_title ,
    //         'body_title' => $body_title,
    //         'breadcrumbs' => $breadcrumbs]);
    // }


    // public function returned()
    // {
    //     $page_title = __('messages.orders_returned');
    //     $body_title = __('messages.orders_returned');
    //     $breadcrumbs = 'admin.orders.returned';
    //     $orders = Order::where('order_status',5)->paginate(20);
    //     return view('admin_end.orders.index')->with(['orders' => $orders ,
    //         'page_title' => $page_title ,
    //         'body_title' => $body_title,
    //         'breadcrumbs' => $breadcrumbs]);
    // }

    public function show(Order $order)
    {
        return view('admin.orders.show_order',['order' => $order]);
    }

    public function details(Order $order){

        return view('admin.orders.details',['order' => $order]);
    }


}

