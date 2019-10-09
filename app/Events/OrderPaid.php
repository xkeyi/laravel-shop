<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Models\Order;

// 事件本身不需要有逻辑，只需要包含相关的信息即可(逻辑写在事件监听器中,一个事件可以关联多个监听器，每个监听器实现单独的功能)，在我们这个场景里就只需要一个订单对象。
class OrderPaid
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    protected $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function getOrder()
    {
        return $this->order;
    }
}
