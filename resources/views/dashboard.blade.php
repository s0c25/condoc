<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Inicio') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="container mx-auto px-4 sm:px-8">
          <div class="py-8">
            <div>
              <h2 class="text-2xl font-semibold leading-tight">Pacientes

                <a class="bg-blue-600 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" title="Agregar nuevo paciente" href="{{ route('nuevoPaciente') }}">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" title="Agregar nuevo paciente" style="color: azure">
                    <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                  </svg>
                </a>

              </h2>


            </div>
            @livewire('buscador-component')
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>