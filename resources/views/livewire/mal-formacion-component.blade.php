<div class="bg-gray-800 rounded-lg">
    <div class="my-2 flex sm:flex-row flex-col pt-5 mx-5">
        <div class="block relative ">
            @if (session()->has('message'))
                <div x-data="{ show: true }"
                    x-init="() => {setTimeout(() => show = true, 500);setTimeout(() => show = false, 5000); }"
                    x-show="show">
                    <x-success-message></x-success-message>
                </div>
            @endif
            <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                    <path
                        d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                    </path>
                </svg>
            </span>

            <input placeholder="Falta pie" type="text"
                class="appearance-none rounded-lg sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none"
                wire:model="name" name="name" />

        </div>

    </div>
    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th
                            class="px-5 py-3 rounded-lg border-gray-800 bg-gray-800 text-left text-xs font-semibold text-white uppercase tracking-wider">
                            Mal Formacion
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($malFormacions as $malFormacion)

                        <tr>
                            <td class="px-5 py-5 border-b border-red-900 bg-red-200 text-sm">

                                <div class="flex items-center">
                                    <div class="ml-3 mx-8">
                                        <p class="text-gray-900 text-xl font-bold whitespace-no-wrap">
                                            {{ $malFormacion->name }}</p>
                                        <span class="relative inline-block px-3 py-1 font-semibold leading-tight mr-50">
                                            @if ($confirming === $malFormacion->id)

                                                <button title="¿Seguro" wire:click="destroy({{ $malFormacion->id }})">
                                                    <span aria-hidden
                                                        class="absolute inset-0 bg-red-900 opacity-50 rounded-full"></span>
                                                    <span class="relative text-white semibold">¿Seguro?</span>
                                                </button>
                                            @else
                                                <button title="Eliminar"
                                                    wire:click="confirmDelete({{ $malFormacion->id }})">
                                                    <span aria-hidden
                                                        class="absolute inset-0 bg-red-900 opacity-50 rounded-full"></span>
                                                    <span class="relative text-white semibold">Eliminar</span>
                                                </button>
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty

                        <div class="px-4 py-3 sm:px-6 text-white">
                            No existe,
                            <span class="relative inline-block px-3 py-1 font-semibold leading-tight mr-50">
                                <button title="Eliminar" wire:click="add">
                                    <span aria-hidden
                                        class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                    <span class="relative text-white semibold">Agregalo</span>
                                </button>
                            </span>
                        </div>
        </div>
        @endforelse

        </tbody>
        </table>
        <div class="bg-gray-200 px-4 py-3 border-t border-gray-200 sm:px-6">
            {{ $malFormacions->links() }}
        </div>
    </div>
</div>
</div>
</div>
