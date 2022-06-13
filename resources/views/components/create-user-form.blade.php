<div class="flex w-full flex-col rounded-lg bg-white p-6">
    <form action="{{route('users.create')}}" method="post">
        @csrf
        <div class="flex w-full items-center justify-between">
        <div class="flex flex-col">
            <span class="text-xl font-bold text-slate-700">Novo Usuário</span>
            <span class="text-base text-gray-400">Registra um novo usuário no Admin</span>
        </div>

        <a class="rounded-lg bg-green-500/10 p-2 px-4 font-semibold text-green-500 hover:bg-green-500 hover:text-white transition">
            <button type="submit">
                Salvar
            </button>
        </a>
        </div>

        <hr class="my-4 h-1 rounded-lg text-gray-50" />

        <div class="flex flex-col">
        <span class="mb-2 text-lg font-semibold text-slate-800">Dados Cadastrais</span>
        <div>
            <span class="flex flex-col gap-4 text-sm text-slate-400">
            <span class="flex items-center justify-between">
                <span class="font-medium">Nome completo</span>
                <x-input type="text" name="name" placeholder="Fulano de Tal" autocomplete="given-name" class="w-3/4" />
            </span>

            <span class="flex items-center justify-between">
                <span class="font-medium">Email</span>
                <x-input type="email" name="email" placeholder="examplo@deliverymeduza.ga" autocomplete="email" class="w-3/4" />          
            </span>
            </span>
        </div>
        </div>

        <div class="my-4 flex flex-col">
        <span class="mb-2 text-lg font-semibold text-slate-800">Permissões</span>
        <div class="flex items-center">
            <input id="default-checkbox" type="checkbox" name="admin"  class="text-brand focus:ring-brand h-4 w-4 rounded border-gray-300 bg-gray-100 focus:ring-2" />
            <label for="default-checkbox" class="ml-2 text-sm font-medium text-slate-400">Administrador</label>
        </div>
        </div>
    </form>
  </div>
