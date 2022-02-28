<div class="grid grid-cols-6 gap-6">
  <div class="col-span-6 sm:col-span-3">
    <label for="first-name" class="block text-sm font-medium text-gray-700">Nombres</label>
    <input type="text" name="name" id="name" wire:model="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full
                    shadow-sm sm:text-sm border-gray-300 rounded-md">
    @error('name') <span class="error">{{ $message }}</span> @enderror

  </div>

  <div class="col-span-6 sm:col-span-3">
    <label for="last-name" class="block text-sm font-medium text-gray-700">Apellidos</label>
    <input type="text" name="lastname" id="lastname" autocomplete="lastname" wire:model="lastname" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block
                   w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
    @error('lastname')
    <p class="text-sm text-red-600">
      {{ $message }}
    </p>
    @enderror
  </div>

  <div class="col-span-6 sm:col-span-3">
    <label for="edoCivil" class="block text-sm font-medium text-gray-700">Estado Civil</label>


    <select id="edoCivil" name="edoCivil" autocomplete="" wire:model="edoCivil" 
    class="mt-1 block w-full py-2 px-3 border border-gray-300 
         bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
         <option value='' selected disabled require>Selecciona opción</option>
          <option value={{ $estado_civil[0] }}>Soltera</option>
          <option value={{ $estado_civil[1] }}>Casada</option>
          <option value={{ $estado_civil[2] }}>Divorsiada</option>
          <option value={{ $estado_civil[3] }}>Viuda</option>

        </select>


<!-- 

    <input type="text" name="edoCivil" id="edoCivil" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 
                  block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" wire:model="edoCivil"> -->
    @error('edoCivil')
    <p class="text-sm text-red-600">
      {{ $message }}
    </p>
    @enderror
  </div>

  <div class="col-span-6 sm:col-span-3">
    <label for="ocupacion" class="block text-sm font-medium text-gray-700">Ocupación</label>
    <input type="text" name="ocupacion" id="ocupacion" wire:model="ocupacion" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block 
                  w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
    @error('ocupacion')
    <p class="text-sm text-red-600">
      {{ $message }}
    </p>
    @enderror
  </div>
  <div class="col-span-6 sm:col-span-6 lg:col-span-2">
    <label for="cedula" class="block text-sm font-medium text-gray-700">Cedula</label>
    <input type="text" name="cedula" id="cedula" autocomplete="address-level2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" wire:model="cedula">
    @error('cedula')
    <p class="text-sm text-red-600">
      {{ $message }}
    </p>
    @enderror
  </div>

  <div class="col-span-6 sm:col-span-3 lg:col-span-2">
    <label for="edad" class="block text-sm font-medium text-gray-700">Edad</label>
    <input type="text" name="edad" id="edad" autocomplete="edad" wire:model="edad" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm 
                   sm:text-sm border-gray-300 rounded-md">
    @error('edad')
    <p class="text-sm text-red-600">
      {{ $message }}
    </p>
    @enderror
  </div>

  <div class="col-span-6 sm:col-span-3 lg:col-span-2">
    <label for="phone" class="block text-sm font-medium text-gray-700">Telefono</label>
    <input type="text" name="phone" id="phone" autocomplete="phone" 
    wire:model="phone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 
    block w-full shadow-sm sm:text-sm 
                  border-gray-300 rounded-md">
    @error('phone')
    <p class="text-sm text-red-600">
      {{ $message }}
    </p>
    @enderror
  </div>


  <div class="col-span-6">
    <label for="street-address" class="block text-sm font-medium text-gray-700">Dirección</label>
    <input type="text" name="direccion" id="direccion"
     autocomplete="direccion" wire:model="direccion"
      class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block
      w-full shadow-sm sm:text-sm
                    border-gray-300 rounded-md" required>
    @error('direccion')
    <p class="text-sm text-red-600">
      {{ $message }}
    </p>
    @enderror
  </div>

  <div class="col-span-6 sm:col-span-3">
    @livewire('drop-down-componet')

  </div>

</div>