<div class="border-b-2 block md:flex">
  <div class="w-full  p-4 sm:p-6 lg:p-8 bg-red-100 shadow-md">
    {{-- FUM --}}
    <div class="pb-6">
      <label for="fum" class="font-semibold text-gray-700 block pb-1">FUM</label>
      <div class="flex">
        <input id="fum" class="border-1  rounded-r px-4 py-2 w-full" type="text" placeholder="" name="fum" value="{{ old('fum', '') }}" required />
      </div>
      @error('fum')
      <p class="text-sm text-red-600">
        {{ $message }}
      </p>
      @enderror
    </div>

    {{-- Edad Gestacional --}}
    <div class="pb-6">
      <label for="gestacion" class="font-semibold text-gray-700 block pb-1">Edad
        Gestacional</label>
      <div class="flex">
        <input id="gestacion" class="border-1  rounded-r px-4 py-2 w-full" type="text" placeholder="" name="gestacion" value="{{ old('gestacion', '') }}" required />
      </div>
      @error('gestacion')
      <p class="text-sm text-red-600">
        {{ $message }}
      </p>
      @enderror
    </div>

    {{-- Edad Gestacional en Primera Consulta --}}
    <div class="pb-6">
      <label for="gestacionpc" class="font-semibold text-gray-700 block pb-1">Edad
        Gestacional en Primera Consulta</label>
      <div class="flex">
        <input id="gestacionpc" class="border-1  rounded-r px-4 py-2 w-full" type="text" placeholder="" name="gestacionpc" value="{{ old('gestacionpc', '') }}" required />
      </div>
      @error('gestacionpc')
      <p class="text-sm text-red-600">
        {{ $message }}
      </p>
      @enderror
    </div>



    <div class="flex justify-between">
      <span class="text-xl font-semibold block">Estática
        Fetal</span>
    </div>




    {{-- Embarazo --}}
    <div class="pb-6">
      <label for="embarazo" class="font-semibold text-gray-700 block pb-1">Embarazo</label>
      <div class="flex">
        <input id="embarazo" class="border-1  rounded-r px-4 py-2 w-full" type="text" placeholder="" name="embarazo" value="{{ old('embarazo', '') }}" required />
      </div>
      @error('embarazo')
      <p class="text-sm text-red-600">
        {{ $message }}
      </p>
      @enderror
    </div>

    {{-- feto --}}
    <div class="pb-6">
      <label for="feto" class="font-semibold text-gray-700 block pb-1">Feto</label>
      <div class="flex">
        <input id="feto" class="border-1  rounded-r px-4 py-2 w-full" type="text" placeholder="" name="feto" value="{{ old('feto', '') }}" required />
      </div>
      @error('feto')
      <p class="text-sm text-red-600">
        {{ $message }}
      </p>
      @enderror
    </div>

    {{-- Situación --}}
    <div class="pb-6">
      <label for="situacion" class="font-semibold text-gray-700 block pb-1">Situación</label>
      <div class="flex">
        <input id="situacion" class="border-1  rounded-r px-4 py-2 w-full" type="text" placeholder="" name="situacion" value="{{ old('situacion', '') }}" required />
      </div>
      @error('situacion')
      <p class="text-sm text-red-600">
        {{ $message }}
      </p>
      @enderror
    </div>

    {{-- Presentación --}}
    <div class="pb-6">
      <label for="presentacion" class="font-semibold text-gray-700 block pb-1">Presentación</label>
      <div class="flex">
        <input id="presentacion" class="border-1  rounded-r px-4 py-2 w-full" type="text" placeholder="" name="presentacion" value="{{ old('presentacion', '') }}" required />
      </div>
      @error('presentacion')
      <p class="text-sm text-red-600">
        {{ $message }}
      </p>
      @enderror
    </div>

    {{-- Posición --}}
    <div class="pb-6">
      <label for="posicion" class="font-semibold text-gray-700 block pb-1">Posición</label>
      <div class="flex">
        <input id="posicion" class="border-1  rounded-r px-4 py-2 w-full" type="text" placeholder="" name="posicion" value="{{ old('posicion', '') }}" required />
      </div>
      @error('posicion')
      <p class="text-sm text-red-600">
        {{ $message }}
      </p>
      @enderror
    </div>
  </div>