<div>
  <div class="py-12 px-5">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
      <form method="post" enctype="multipart/form-data" action="{{ route('addPaciente') }}">
            @csrf
        <div class="px-4 sm:px-0">
        
            <h3 class="text-lg font-medium leading-6 text-gray-900">Perfil Medico</h3>
            <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
        </div>
      </div>
     
      <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            @livewire('valid-paciente-form')
          </div>
        </div>

      </div>

    </div>
  </div>
  <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200"></div>
    </div>
  </div>

  <!-- //Datos biopsocosial -->
  
  <div class="py-12 px-5">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Datos Biopsicosociales</h3>
          <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">

        <div>@livewire('estatus-component')</div>

      </div>
    </div>

  </div>
 
  
  <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200"></div>
    </div>
  </div>

  <!-- Datos Gineco-obstétricos -->
<div class="py-12 px-5">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Datos Gineco-obstétricos</h3>
          <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">

        <div>@livewire('perfil-clinico-form')</div>

      </div>
    </div>
  </div>

  <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200"></div>
    </div>
  </div> 
  <!-- Diagnostico -->

  <div class="py-12 px-5">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Diagnostico</h3>
          <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="shadow overflow-hidden sm:rounded-md">

          @livewire('diagnostico-component')
         

          <!--  -->
        </div>
      </div>
    </div>
  </div>
  <div class="px-4 py-3  text-right sm:px-6">
    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm
             text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 
             focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Verificar y Guardar</button>
  </div>
  </form>
  <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200"></div>
    </div>
  </div>
  <!-- <div class="mt-2 text-center text-white">
              <a class="w-32 mx-2" href="https://tailwindcss.com/">TailwindCSS</a>
              <a class="w-32 mx-2" href="https://github.com/alpinejs/alpine">AlpineJS</a>
            </div> -->
  
</div>