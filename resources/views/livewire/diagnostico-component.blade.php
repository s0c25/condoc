<div>
  <div class="px-4 py-5 bg-white sm:p-6">
    <div class="grid grid-cols-6 gap-6">
      {{-- Estado Consulta --}}

      <div class="col-span-6 sm:col-span-3">
        <label for="status" class="font-semibold text-gray-700 block pb-1">Estado Consulta</label>
        <select id="status" name="status" autocomplete="" wire:model="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 
         bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
         <option value='' selected disabled require>Selecciona opción</option>
          @foreach ($estatusC as $statu)
          <option value={{ $statu->id }}>{{ $statu->name }}</option>
          @endforeach
        </select>
        @error('status')
        <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>

      
      {{-- Mal formacion --}}

      <div class="col-span-6 sm:col-span-6 lg:col-span-2 ">
        <label for="malformacion" class="font-semibold text-gray-700 block pb-1">Malformaciones</label>
        <select wire:model="malformacion"  class="form-multiselect block w-full" 
        multiple id="my-multiselect" required name="malformacion[]">
        <option value='' selected disabled required>Selecciona opción</option>
          @foreach ($malformacionesC as $malformacione)
          <option required value={{ $malformacione->id }} >{{ $malformacione->name }}</option>
          @endforeach

        </select>



        @error('malformacion')
        <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror

      </div>

     


     
    </div>

  </div>
  <div class="flex justify-center">
            <div class="mb-3 w-96">
              <label for="formFile" class="form-label inline-block mb-2 text-gray-700">Subir Planilla
              </label>
              <input class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="formFile" required id="file-upload" name="plantilla" wire:model="plantilla">
              @error('plantilla')
              <p class="text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>

          </div>
</div>
</div>