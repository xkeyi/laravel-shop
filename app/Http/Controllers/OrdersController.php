<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Models\ProductSku;
use App\Models\UserAddress;
use App\Models\Order;
use Carbon\Carbon;
use App\Exceptions\InvalidRequestException;
use App\Jobs\CloseOrder;
use App\Services\CartService;

class OrdersController extends Controller
{
    // 利用 Laravel 的自动解析功能注入 CartService 类
    public function store(OrderRequest $request, OrderService $orderService)
    {
        $user    = $request->user();
        $address = UserAddress::find($request->input('address_id'));

        return $orderService->store($user, $address, $request->input('remark'), $request->input('items'));
    }

    public function index(Request $request)
    {
        $orders = Order::query()
                    ->with(['items.product', 'items.productSku'])
                    ->where('user_id', $request->user()->id)
                    ->orderBy('created_at', 'desc')
                    ->paginate();

        return view('orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $this->authorize('own', $order);

        // load() 是在已经查询出来的模型上调用，而 with() 则是在 ORM 查询构造器上调用
        $order->load(['items.product', 'items.productSku']);

        return view('orders.show', compact('order'));
    }
}
