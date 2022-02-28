<div>
  <form class="w-full" method="post" enctype="multipart/form-data" action="{{ route('addPaciente') }}">
    @csrf
    <div class="w-full md:w-2/5 p-4 sm:p-6 lg:p-8 bg-blue-100 shadow-md">
      <div class="flex justify-between">
        <span class="text-xl font-semibold block">Nuevo
          Paciente</span>
      </div>
      {{-- cedula --}}
      <div class="pb-6">
        <label for="cedula" class="font-semibold text-gray-700 block pb-1">Cedula</label>
        <div class="flex">
          <input id="username" class="border-1  rounded-r px-4 py-2 w-full" wire:model="cedula" />
        </div>
        @error('cedula')
        <p class="text-sm text-red-600">
          {{ $message }}
        </p>
        @enderror
      </div>
      {{-- name --}}
      <div class="pb-6">
        <label for="name" class="font-semibold text-gray-700 block pb-1">Nombres</label>
        <div class="flex">
          <input id="username" class="border-1  rounded-r px-4 py-2 w-full" wire:model="name" />
        </div>
        @error('name')
        <p class="text-sm text-red-600">
          {{ $message }}
        </p>
        @enderror
      </div>

      {{-- lastname --}}
      <div class="pb-6">
        <label for="lastname" class="font-semibold text-gray-700 block pb-1">Apellidos</label>
        <div class="flex">
          <input id="lastname" class="border-1  rounded-r px-4 py-2 w-full" wire:model="lastname" />
        </div>
        @error('lastname')
        <p class="text-sm text-red-600">
          {{ $message }}
        </p>
        @enderror
      </div>


      {{-- ocupacion --}}
      <div class="pb-6">
        <label for="ocupacion" class="font-semibold text-gray-700 block pb-1">Ocupación</label>
        <div class="flex">
          <input id="ocupacion" class="border-1  rounded-r px-4 py-2 w-full" wire:model="ocupacion" />
        </div>
        @error('ocupacion')
        <p class="text-sm text-red-600">
          {{ $message }}
        </p>
        @enderror
      </div>

      {{-- telefono --}}
      <div class="pb-6">
        <label for="phone" class="font-semibold text-gray-700 block pb-1">Telefono</label>
        <div class="flex">
          <input id="phone" class="border-1  rounded-r px-4 py-2 w-full" wire:model="phone" />
        </div>
        @error('phone')
        <p class="text-sm text-red-600">
          {{ $message }}
        </p>
        @enderror
      </div>

      {{-- edad --}}
      <div class="pb-6">
        <label for="edad" class="font-semibold text-gray-700 block pb-1">Edad</label>
        <div class="flex">
          <input id="edad" class="border-1  rounded-r px-4 py-2 w-full" wire:model="edad" />
        </div>
        @error('edad')
        <p class="text-sm text-red-600">
          {{ $message }}
        </p>
        @enderror
      </div>
      @livewire('drop-down-componet')

    </div>
    <button type="submit">Save Contact</button>
  </form>
</div>