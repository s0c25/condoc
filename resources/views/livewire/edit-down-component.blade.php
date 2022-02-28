<div>

    <div class="col-span-6 sm:col-span-3">
        <label for="id_estado" class="block text-sm font-medium text-gray-700">Estado</label>
        <select id="estado" name="id_estado" autocomplete="estado"
            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
            wire:model="selectEstado">
            <option value=>{{$est}}</option>
            @foreach($estados as $estado)
            <option value={{ $estado->id }}>{{ $estado->name }}</option>
            @endforeach
        </select>
        @error('id_estado')
        <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
   
    @if(!is_null($selectEstado) or !is_null($est) )
    <div class="col-span-6 sm:col-span-3">
        <label for="id_ciudad" class="block text-sm font-medium text-gray-700">Ciudad</label>
        <select id="ciudad" name="id_ciudad" autocomplete="ciudad"
            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
            >
            <option value='' selected>{{$ciud}}</option>
            @foreach($this->ciudades as $ciudad)
            <option value={{ $ciudad->id }}>{{ $ciudad->name }}</option>
            @endforeach
        </select>

        @error('id_ciudad')
        <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    @endif
   
    
   </div>