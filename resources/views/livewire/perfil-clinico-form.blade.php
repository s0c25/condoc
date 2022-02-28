<div class="shadow overflow-hidden sm:rounded-md">
  <div class="px-4 py-5 bg-white sm:p-6">
    <div class="grid grid-cols-6 gap-6">

      {{-- Antecedentes de Infecciones --}}
      <div class="col-span-6 sm:col-span-3">
        <label for="aninfeccion" class="font-semibold text-gray-700 block pb-1">Antecedentes
          de Infecciones</label>
        <div class="flex">
          <input id="aninfeccion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder=""
                    name="aninfeccion" required wire:model="aninfeccion" />
        </div>
        @error('aninfeccion')
        <p class="text-sm text-red-600">
          {{ $message }}
        </p>
        @enderror
      </div>

      {{-- Gestas --}}
      <div class="col-span-6 sm:col-span-3">
        <label for="gestas" class="font-semibold text-gray-700 block pb-1">Gestas</label>
        <div class="flex">
          <input id="gestas" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="gestas" required wire:model="gestas" />
        </div>
        @error('gestas')
        <p class="text-sm text-red-600">
          {{ $message }}
        </p>
        @enderror
      </div>


      {{-- Paras --}}
      <div class="col-span-6 sm:col-span-6 lg:col-span-2">
        <label for="paras" class="font-semibold text-gray-700 block pb-1">Paras</label>
        <div class="flex">
          <input id="paras" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="paras" required wire:model="paras" />
        </div>
        @error('paras')
        <p class="text-sm text-red-600">
          {{ $message }}
        </p>
        @enderror
      </div>

      {{-- Abortos --}}
      <div class="col-span-6 sm:col-span-6 lg:col-span-2">
        <label for="abortos" class="font-semibold text-gray-700 block pb-1">Abortos</label>
        <div class="flex">
          <input type="text" name="abortos" id="abortos" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" wire:model="abortos">
        </div>
        @error('abortos')
        <p class="text-sm text-red-600">
          {{ $message }}
        </p>
        @enderror
      </div>



      {{-- Cesáreas --}}
      <div class="col-span-6 sm:col-span-6 lg:col-span-2">
        <label for="cesareas" class="font-semibold text-gray-700 block pb-1">Cesáreas</label>
        <input type="text" name="cesareas" id="cesareas" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" wire:model="cesareas" required>
        @error('cesareas')
        <p class="text-sm text-red-600">
          {{ $message }}
        </p>
        @enderror
      </div>

      {{-- EE --}}
      <div class="col-span-6 sm:col-span-6 lg:col-span-2">
        <label for="ee" class="font-semibold text-gray-700 block pb-1">EE</label>
        <div class="flex">
          <input id="ee" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="ee" wire:model="ee" required />
        </div>
        @error('ee')
        <p class="text-sm text-red-600">
          {{ $message }}
        </p>
        @enderror
      </div>

      {{-- ETG --}}
      <div class="col-span-6 sm:col-span-6 lg:col-span-2">
        <label for="etg" class="font-semibold text-gray-700 block pb-1">ETG</label>
        <div class="flex">
          <input id="etg" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="etg" wire:model="etg" required />
        </div>
        @error('etg')
        <p class="text-sm text-red-600">
          {{ $message }}
        </p>
        @enderror
      </div>

      {{-- FUM --}}
      <div class="col-span-6 sm:col-span-6 lg:col-span-2">
        <label for="fum" class="font-semibold text-gray-700 block pb-1">FUM</label>
        <div class="flex">
          <input id="fum" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="fum" wire:model="fum" required />
        </div>
        @error('fum')
        <p class="text-sm text-red-600">
          {{ $message }}
        </p>
        @enderror
      </div>

      {{-- Edad Gestacional --}}
      <div class="col-span-6 sm:col-span-6 lg:col-span-2">
        <label for="gestacion" class="font-semibold text-gray-700 block pb-1">Edad
          Gestacional</label>
        <div class="flex">
          <input id="gestacion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="gestacion" wire:model="gestacion" required />
        </div>
        @error('gestacion')
        <p class="text-sm text-red-600">
          {{ $message }}
        </p>
        @enderror
      </div>

      {{-- Edad Gestacional en Primera Consulta --}}
      <div class="col-span-6 sm:col-span-6 lg:col-span-2">
        <label for="gestacionpc" class="font-semibold text-gray-700 block pb-1">Edad
          Gestacional P.Consulta</label>
        <div class="flex">
          <input id="gestacionpc" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="gestacionpc" wire:model="gestacionpc" required />
        </div>
        @error('gestacionpc')
        <p class="text-sm text-red-600">
          {{ $message }}
        </p>
        @enderror
      </div>

      {{-- Embarazo --}}
      <div class="col-span-6 sm:col-span-6 lg:col-span-2">
        <label for="embarazo" class="font-semibold text-gray-700 block pb-1">Embarazo</label>
        <div class="flex">
          <input id="embarazo" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="embarazo" wire:model="embarazo" required />
        </div>
        @error('embarazo')
        <p class="text-sm text-red-600">
          {{ $message }}
        </p>
        @enderror
      </div>

      {{-- feto --}}
      <div class="col-span-6 sm:col-span-6 lg:col-span-2">
        <label for="feto" class="font-semibold text-gray-700 block pb-1">Feto</label>
        <div class="flex">
          <input id="feto" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="feto" wire:model="feto" required />
        </div>
        @error('feto')
        <p class="text-sm text-red-600">
          {{ $message }}
        </p>
        @enderror
      </div>

      {{-- Situación --}}
      <div class="col-span-6 sm:col-span-6 lg:col-span-2">
        <label for="situacion" class="font-semibold text-gray-700 block pb-1">Situación</label>
        <div class="flex">
          <input id="situacion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="situacion" wire:model="situacion" required />
        </div>
        @error('situacion')
        <p class="text-sm text-red-600">
          {{ $message }}
        </p>
        @enderror
      </div>

      {{-- Presentación --}}
      <div class="col-span-6 sm:col-span-6 lg:col-span-2">
        <label for="presentacion" class="font-semibold text-gray-700 block pb-1">Presentación</label>
        <div class="flex">
          <input id="presentacion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="presentacion" wire:model="presentacion" required />
        </div>
        @error('presentacion')
        <p class="text-sm text-red-600">
          {{ $message }}
        </p>
        @enderror
      </div>

      {{-- Posición --}}
      <div class="col-span-6 sm:col-span-6 lg:col-span-2">
        <label for="posicion" class="font-semibold text-gray-700 block pb-1">Posición</label>
        <div class="flex">
          <input id="posicion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="posicion" wire:model="posicion" required />
        </div>
        @error('posicion')
        <p class="text-sm text-red-600">
          {{ $message }}
        </p>
        @enderror
      </div>

    </div>
  </div>
</div>