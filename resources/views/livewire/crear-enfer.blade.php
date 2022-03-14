<x-modal>
  <x-slot name="title">
    Crear Malformacion
    <button wire:click="$emit('closeModal')" class="text-red-900">
      Cerrar Ventana
    </button>
  </x-slot>

  <x-slot name="content">
  

      <div class="col-span-6 sm:col-span-3">
        <label for="id_estado" class="block text-sm font-medium text-gray-700">Selecciona la malformacion</label>
        <select id="estado" name="id_estado" autocomplete="estado" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full
                    shadow-sm sm:text-sm border-gray-300 rounded-md" wire:model="idformacion" required>
          <option value='' selected disabled></option>
          @foreach ($formacion as $formacio)
          <option value={{ $formacio->id }}>{{ $formacio->name }}</option>
          @endforeach
        </select>

        <label for="id_estado" class="block text-sm font-medium text-gray-700">Descripcion de la Malformacion</label>

        <input type="text" name="descripcionMalFormacion" id="descripcionMalFormacion" wire:model="descripcionMalFormacion" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block 
                  w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  <label for="id_estado" class="block text-sm font-medium text-gray-700">Nombre Enfermedad</label>

        <input type="text" name="enfermedadMalformacion" id="enfermedadMalformacion" wire:model="enfermedadMalformacion" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block 
                  w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

      </div>


      </div>



      <div class="px-4 py-3  text-right sm:px-6">
        <button wire:click="add" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm
             text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 
             focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Guardar</button>
      </div>
      </div>

    </form>

  </x-slot>

  <x-slot name="buttons">
    <button wire:click="$emit('closeModal')">
      Cerrar
    </button>
  </x-slot>


</x-modal>