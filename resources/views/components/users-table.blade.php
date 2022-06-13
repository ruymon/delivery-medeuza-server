<div class="w-full">
    <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-md">
            <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                <th class="bg-gray-50 px-6 py-3 text-left text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">{{ __('users.name') }}</th>
                <th class="bg-gray-50 px-6 py-3 text-left text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">{{__('users.email')}}</th>
                <th class="bg-gray-50 px-6 py-3 text-left text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">{{__('users.role.title')}}</th>
                @if(Auth::user()->admin)
                    <th class="bg-gray-50 px-6 py-3 text-left text-xs font-medium uppercase leading-4 tracking-wider text-gray-500"></th>
                    <th class="bg-gray-50 px-6 py-3 text-left text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">Criar</th>
                @endif
            </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
                @foreach($users as $user)
                    <tr data-aos="fade-up">
                        <td class="whitespace-no-wrap px-6 py-4">
                            <div class="flex items-center">
                                <div class="ml-4">
                                    <div class="text-sm font-medium leading-5 text-gray-900">{{$user->name}}</div>
                                </div>
                            </div>
                        </td>
                        
                        <td class="whitespace-no-wrap px-6 py-4">
                            <div class="flex items-center">
                                <div class="ml-4">
                                    <div class="text-sm font-medium leading-5 text-gray-900">{{$user->email}}</div>
                                </div>
                            </div>
                        </td>

                        

                        <td class="whitespace-no-wrap px-6 py-4">
                            @if($user->admin)
                                <span class="inline-flex rounded-full bg-purple-100 px-2 text-xs font-semibold leading-5 text-purple-800"> {{__('users.role.admin')}} </span>
                            @else
                                <span class="inline-flex rounded-full bg-brand/10 px-2 text-xs font-semibold leading-5 text-brand"> {{__('users.role.user')}} </span>
                            @endif
                        </td>
                        
                        @if(Auth::user()->admin)

                        <td class="whitespace-no-wrap px-6 py-4 text-sm leading-5 text-gray-500">
                        
                            @if($user->id == Auth::user()->id)
                                {{__('users.actions.noAction')}}
                            @elseif($user->admin)
                                {{__('users.actions.removeAdmin')}}
                            @else
                                {{__('users.actions.makeAdmin')}}
                            @endif
                        
                        </td>
                        
                        
                        <td class="whitespace-no-wrap px-6 py-4 text-sm leading-5 text-gray-500">
                            @if($user->id !== Auth::user()->id)
                            {{__('users.actions.delete')}}
                            @endif  
                        </td>
                        

                        @endif
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>

</div>