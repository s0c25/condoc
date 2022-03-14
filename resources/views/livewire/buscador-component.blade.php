<div>
    <div class="my-2 flex sm:flex-row flex-col">
        <div class="block relative">
            <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                    <path
                        d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                    </path>
                </svg>
            </span>
            <input placeholder="27214617" type="number"
                class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none"
                wire:model="paciente" />
        </div>
        <div class="relative w-full border-none">
        <select class="text-gray-400 appearance-none border-none 
        inline-block py-3 pl-3 pr-8 rounded leading-tight" wire:model="perPage">
            <option class="pt-6">5</option>
            <option>10</option>
            <option>20</option>
        </select>
        <!-- <select class="text-gray-400 appearance-none border-none 
        inline-block py-3 pl-3 pr-8 rounded leading-tight" wire:model="malformaciones">
        @foreach($malformacion as $malforma)
            <option class="pt-6" value={{$malforma->id}}>{{$malforma->name}}</option>
        @endforeach
            </select> -->
        </div>
    </div>
   
    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Paciente
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Edad
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Fecha Consulta
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Ver
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pacientes as $paciente)

                    <tr>

                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-10 h-10">
                                   
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$paciente->name }} {{$paciente->lastname }} </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{$paciente->edad}}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                            {{$paciente->created_at}}
                            </p>
                        </td>
                        <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                            <!-- <span class="relative inline-block px-3 py-1 font-semibold leading-tight">

                                <span aria-hidden class="absolute inset-0 bg-yellow-600 opacity-50 rounded-full"></span>
                                <span class="relative text-white-600">{{$paciente->status}}</span>
                            </span> -->
                          
                            <span class="relative inline-block px-3 py-1 font-semibold leading-tight">

                                <button title="Ver a detalle" 
                                onclick='Livewire.emit("openModal", "hello-world", {{ json_encode(["paciente_id" => $paciente->id]) }})'
                                >
                                    <span aria-hidden
                                        class="absolute inset-0 bg-blue-200 opacity-50 rounded-full"></span>
                                    <span class="relative text-white-600 semibold">Ver</span>
                                </button>
                            </span>

                        </td>
                       
                    </tr>
                    @empty
                    <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                        <span class="relative">{{$paciente}} no existe,Recuerda solo puedes buscar por Cedula</span>
                    </div>
                    @endforelse
                </tbody>
            </table>
            <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                {{$pacientes->links()}}
            </div>
        </div>
    </div>
</div>
</div>