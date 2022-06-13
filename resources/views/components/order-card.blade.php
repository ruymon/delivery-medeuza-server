<div class="flex md:w-96 w-full flex-col rounded-lg bg-white p-6">
    <div class="flex w-full items-center justify-between">
    <div class="flex flex-col">
        <span class="text-xl font-bold text-slate-700">{{__('order.order')}} <span class="font-mono">#{{$order->id}}</span></span>
        <span class="text-base text-gray-400">{{ $order->created_at }}</span>
    </div>

    <div class="w-1 animate-pulse rounded-full bg-green-500 p-[5px]"></div>
    </div>

    <hr class="my-4 h-1 rounded-lg text-gray-50" />

    <div class="flex flex-col">
    <span class="mb-2 text-lg font-semibold text-slate-800">{{__('order.victimDetails.title')}}</span>
    <div>
        <span class="text-sm text-slate-400">
        <span class="flex items-center justify-between">
            <span class="font-medium">{{__('order.victimDetails.firstName')}}</span>
            <span>{{$order->firstName}}</span>
        </span>

        <span class="flex items-center justify-between">
            <span class="font-medium">{{__('order.victimDetails.lastName')}}</span>
            <span>{{$order->lastName}}</span>
        </span>

        <span class="flex items-center justify-between">
            <span class="font-medium">{{__('order.victimDetails.email')}}</span>
            
            @if($order->email)
                <span>{{$order->email}}</span>
            @else
                <span class="text-orange-500">{{__('order.notProvided')}}</span>
            @endif
        </span>

        <span class="flex items-center justify-between">
            <span class="font-medium">{{__('order.victimDetails.phone')}}</span>
            @if($order->phone)
                <span>{{$order->phone}}</span>
            @else
                <span class="text-orange-500">{{__('order.notProvided')}}</span>
            @endif
            </span>
        </span>
    </div>
    </div>

    <div class="my-4 flex flex-col">
    <span class="mb-2 text-lg font-semibold text-slate-800">{{__('order.victimDetails.address')}}</span>
    <div>
        <span class="text-sm text-slate-400">Rua Santos Almeida, Número 159 Ap 78, Pompeia</span>
    </div>
    </div>
</div>