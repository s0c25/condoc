<div>

  <div class="col-span-6 sm:col-span-3">
    <label for="id_estado" class="block text-sm font-medium text-gray-700">Estado</label>
    <select id="estado" name="id_estado" autocomplete="estado" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full
                    shadow-sm sm:text-sm border-gray-300 rounded-md" wire:model="selectEstado" required>
      <option value='' selected disabled>Selecciona Ciudad</option>
      @foreach ($estados as $estado)
      <option value={{ $estado->id }}>{{ $estado->name }}</option>
      @endforeach
    </select>
    @error('id_estado')
    <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
  </div>

  <div class="col-span-6 sm:col-span-3">
    <label for="id_ciudad" class="block text-sm font-medium text-gray-700">Ciudad</label>
    <select id="ciudad" name="id_ciudad" wire:model="id_ciudad" autocomplete="ciudad" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full
                    shadow-sm sm:text-sm border-gray-300 rounded-md" required>
      <option value='' selected disabled>Selecciona Ciudad</option>
      @foreach ($this->ciudades as $ciudad)
      <option value={{ $ciudad->id }}>{{ $ciudad->name }}</option>
      @endforeach
    </select>

    @error('id_ciudad')
    <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
  </div>


</div>