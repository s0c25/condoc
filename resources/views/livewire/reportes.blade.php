<x-modal>
  <x-slot name="title">
    Conteo de casos
    <button wire:click="$emit('closeModal')" class="text-red-900">
      Cerrar Ventana
    </button>
  </x-slot>

  <x-slot name="content">
    <form method="post" enctype="multipart/form-data" action="{{ route('pdfadd') }}">
      @csrf

      <div class="col-span-6 sm:col-span-6 lg:col-span-2 ">
        <label for="mff" class="font-semibold text-gray-700 block pb-1">
          Selecciona las Malformaciones a Consultar</label>
        <select class="form-multiselect block w-full" wire:model="mff" multiple id="my-multiselect" name="mff[]" required>
          <option value='' required disabled></option>
          @foreach ($nombreMalformacion as $datos)
          <option required value={{ $datos->id }}>{{ $datos->name }}</option>
          @endforeach

        </select>

      </div>



      <div class="px-4 py-3  text-right sm:px-6">
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm
             text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 
             focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Convertir a PDF</button>
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