<div>
        @switch($param[0])
            @case ('success')
                <div class="flex justify-center py-2 px-8 bg-green-600 w-full text-white">
            @break

            @case ('alert')
                <div class="flex justify-center py-2 px-8 bg-orange-500 w-full text-white">
            @break

            @case ('danger')
                <div class="flex justify-center py-2 px-8 bg-brand-600 w-full text-white">
            @break
        @endswitch
    
        <div class="flex w-full max-w-7xl sm:px-6 lg:px-8 px-4 font-black items-center gap-2">
            @switch($param[0])
                @case ('success')
                <i class="ph-check-circle text-xl"></i>
                @break

                @case ('alert')
                <i class="ph-warning-octagon text-xl"></i>
                @break

                @case ('danger')
                <i class="ph-x-circle text-xl"></i>
                @break
            @endswitch
            
            {{$param[1]}}
        </div>
    </div>
</div>