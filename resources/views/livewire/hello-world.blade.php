<x-modal>
  <x-slot name="title">
    Paciente Vista
    <button wire:click="$emit('closeModal')" class="text-red-900">
      Cerrar Ventana
    </button>
  </x-slot>

  <x-slot name="content">
    <div class="grid grid-cols-6 gap-6">
      <div class="col-span-6 sm:col-span-3">
        <label for="first-name" class="block text-sm font-medium text-gray-700">Nombres</label>
        <input readonly type="text" name="name" id="name" wire:model="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full
                    shadow-sm sm:text-sm border-gray-300 rounded-md">

      </div>

      <div class="col-span-6 sm:col-span-3">
        <label for="last-name" class="block text-sm font-medium text-gray-700">Apellidos</label>
        <input readonly type="text" name="lastname" id="lastname" autocomplete="lastname" wire:model="lastname" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block
                   w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

      </div>

      <div class="col-span-6 sm:col-span-3">
        <label for="edoCivil" class="block text-sm font-medium text-gray-700">Estado Civil</label>

        <input readonly type="text" name="edoCivil" id="edoCivil" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 
                  block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" wire:model="edoCivil">

      </div>

      <div class="col-span-6 sm:col-span-3">
        <label for="ocupacion" class="block text-sm font-medium text-gray-700">Ocupación</label>
        <input type="text" name="ocupacion" id="ocupacion" wire:model="ocupacion" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block 
                  w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

      </div>
      <div class="col-span-6 sm:col-span-6 lg:col-span-2">
        <label for="cedula" class="block text-sm font-medium text-gray-700">Cedula</label>
        <input readonly type="text" name="cedula" id="cedula" autocomplete="address-level2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" wire:model="cedula">

      </div>

      <div class="col-span-6 sm:col-span-3 lg:col-span-2">
        <label for="edad" class="block text-sm font-medium text-gray-700">Edad</label>
        <input readonly type="text" name="edad" id="edad" autocomplete="edad" wire:model="edad" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm 
                   sm:text-sm border-gray-300 rounded-md">

      </div>

      <div class="col-span-6 sm:col-span-3 lg:col-span-2">
        <label for="phone" class="block text-sm font-medium text-gray-700">Telefono</label>
        <input readonly type="text" name="phone" id="phone" autocomplete="phone" wire:model="phone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 
    block w-full shadow-sm sm:text-sm 
                  border-gray-300 rounded-md">

      </div>


      <div class="col-span-6">
        <label for="street-address" class="block text-sm font-medium text-gray-700">Dirección</label>
        <input readonly type="text" name="direccion" id="direccion" autocomplete="direccion" wire:model="direccion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block
      w-full shadow-sm sm:text-sm
                    border-gray-300 rounded-md" required>

      </div>

      <div class="col-span-6 sm:col-span-3">

        <label for="ciudadEstadp" class="block text-sm font-medium text-gray-700">Estado - Ciudad</label>

        <input readonly type="text" name="ciudadEstadp" id="ciudadEstadp" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 
              block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" wire:model="ciudadEstadp">

      </div>

    </div>
    <!-- Datos Biopsicosociales -->

    <div class="shadow overflow-hidden sm:rounded-md">
      <div class="px-4 py-5 bg-white sm:p-6">
        <div class="grid grid-cols-6 gap-6">

          {{-- Enfermedad Cronica --}}
          <div class="col-span-6 sm:col-span-3 lg:col-span-2">
            <label for="enfemedadC" class="font-semibold text-gray-700 block pb-1">Enfermedad Cronica</label>

            <input id="enfemedadC" readonly class="border-1  rounded-r px-4 py-2 w-full" type="text" name="enfemedadC" wire:model="enfemedadC" required />
          </div>

          {{-- Alcohol --}}

          <div class="col-span-6 sm:col-span-3">
            <label for="alcohol" class="font-semibold text-gray-700 block pb-1">Consumo de Alcohol</label>

            <input readonly id="alcohol" class="border-1  rounded-r px-4 py-2 w-full" type="text" name="alcohol" wire:model="alcohol" required />
          </div>

          {{-- drogas --}}

          <div class="col-span-6 sm:col-span-3 lg:col-span-2 overflow-y-auto h-32">
            <label for="drogas" class="font-semibold text-gray-700 block pb-1">Consumo de Drogas</label>

            <select readonly class="form-multiselect block w-full" multiple id="my-multiselect" wire:model="drogas" name="drogas[]">
              @foreach ($drogas as $droga)
              <option readonly disabled>{{ $droga->name }}</option>
              @endforeach
            </select>
          </div>

          {{-- tabaco --}}

          <div class="col-span-6 sm:col-span-3">
            <label for="tabaco" class="font-semibold text-gray-700 block pb-1">Consumo de Tabaco</label>

            <input readonly id="tabaco" class="border-1  rounded-r px-4 py-2 w-full" type="text" name="tabaco" wire:model="tabaco" required />
          </div>

          {{-- Exposición
            a
            Sustancias
            Tóxicas --}}

          <div class="col-span-6 sm:col-span-3 lg:col-span-2">
            <label for="toxicos" class="font-semibold text-gray-700 block pb-1">Exposición
              a
              Sustancias
              Tóxicas</label>

            <select readonly class="form-multiselect block w-full" multiple id="my-multiselect" wire:model="enfemedadC" name="enfemedadC[]">
              @foreach ($toxicos as $toxico)
              <option readonly disabled>{{ $toxico->name }}</option>
              @endforeach
            </select>

          </div>

          {{-- Otros
            Tipos de
            Sustanciass --}}

          <div class="col-span-6 sm:col-span-3 lg:col-span-2">
            <label for="otro" class="font-semibold text-gray-700 block pb-1">Otros
              Tipos de
              Sustancias</label>

            <select readonly class="form-multiselect block w-full" multiple id="my-multiselect" wire:model="otro" name="otro[]">
              @foreach ($otro as $otr)
              <option readonly disabled>{{ $otr->name }}</option>
              @endforeach
            </select>

          </div>

          {{-- Observacion --}}
          <div class="col-span-6 sm:col-span-3 lg:col-span-2">
            <label for="observacion" class="font-semibold text-gray-700 block pb-1">Observación</label>
            <div class="flex">
              <input readonly id="observacion" class="border-1  rounded-r px-4 py-2 w-full" type="text" name="observacion" wire:model="observacion" required />
            </div>

          </div>



        </div>

      </div>

      <!-- DAtos gioneconose -->

      <div class="shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
          <div class="grid grid-cols-6 gap-6">

            {{-- Antecedentes de Infecciones --}}
            <div class="col-span-6 sm:col-span-3">
              <label for="aninfeccion" class="font-semibold text-gray-700 block pb-1">Antecedentes
                de Infecciones</label>
              <div class="flex">
                <input readonly id="aninfeccion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="aninfeccion" required wire:model="aninfeccion" />
              </div>

            </div>

            {{-- Gestas --}}
            <div class="col-span-6 sm:col-span-3">
              <label for="gestas" class="font-semibold text-gray-700 block pb-1">Gestas</label>
              <div class="flex">
                <input readonly id="gestas" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="gestas" required wire:model="gestas" />
              </div>

            </div>


            {{-- Paras --}}
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
              <label for="paras" class="font-semibold text-gray-700 block pb-1">Paras</label>
              <div class="flex">
                <input readonly id="paras" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="paras" required wire:model="paras" />
              </div>

            </div>

            {{-- Abortos --}}
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
              <label for="abortos" class="font-semibold text-gray-700 block pb-1">Abortos</label>
              <div class="flex">
                <input readonly type="text" name="abortos" id="abortos" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" wire:model="abortos">
              </div>

            </div>



            {{-- Cesáreas --}}
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
              <label for="cesareas" class="font-semibold text-gray-700 block pb-1">Cesáreas</label>
              <input readonly type="text" name="cesareas" id="cesareas" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" wire:model="cesareas" required>

            </div>

            {{-- EE --}}
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
              <label for="ee" class="font-semibold text-gray-700 block pb-1">EE</label>
              <div class="flex">
                <input readonly id="ee" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="ee" wire:model="ee" required />
              </div>

            </div>

            {{-- ETG --}}
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
              <label for="etg" class="font-semibold text-gray-700 block pb-1">ETG</label>
              <div class="flex">
                <input readonly id="etg" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="etg" wire:model="etg" required />
              </div>

            </div>

            {{-- FUM --}}
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
              <label for="fum" class="font-semibold text-gray-700 block pb-1">FUM</label>
              <div class="flex">
                <input readonly id="fum" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="fum" wire:model="fum" required />
              </div>

            </div>

            {{-- Edad Gestacional --}}
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
              <label for="gestacion" class="font-semibold text-gray-700 block pb-1">Edad
                Gestacional</label>
              <div class="flex">
                <input readonly id="gestacion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="gestacion" wire:model="gestacion" required />
              </div>

            </div>

            {{-- Edad Gestacional en Primera Consulta --}}
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
              <label for="gestacionpc" class="font-semibold text-gray-700 block pb-1">Edad
                Gestacional P.Consulta</label>
              <div class="flex">
                <input readonly id="gestacionpc" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="gestacionpc" wire:model="gestacionpc" required />
              </div>

            </div>

            {{-- Embarazo --}}
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
              <label for="embarazo" class="font-semibold text-gray-700 block pb-1">Embarazo</label>
              <div class="flex">
                <input readonly id="embarazo" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="embarazo" wire:model="embarazo" required />
              </div>

            </div>

            {{-- feto --}}
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
              <label for="feto" class="font-semibold text-gray-700 block pb-1">Feto</label>
              <div class="flex">
                <input readonly id="feto" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="feto" wire:model="feto" required />
              </div>

            </div>

            {{-- Situación --}}
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
              <label for="situacion" class="font-semibold text-gray-700 block pb-1">Situación</label>
              <div class="flex">
                <input readonly id="situacion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="situacion" wire:model="situacion" required />
              </div>

            </div>

            {{-- Presentación --}}
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
              <label for="presentacion" class="font-semibold text-gray-700 block pb-1">Presentación</label>
              <div class="flex">
                <input readonly id="presentacion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="presentacion" wire:model="presentacion" required />
              </div>

            </div>

            {{-- Posición --}}
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
              <label for="posicion" class="font-semibold text-gray-700 block pb-1">Posición</label>
              <div class="flex">
                <input readonly id="posicion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" type="text" placeholder="" name="posicion" wire:model="posicion" required />
              </div>

            </div>

          </div>
        </div>
      </div>

      <!-- diagnostico -->
      <div>
        <div class="px-4 py-5 bg-white sm:p-6">
          <div class="grid grid-cols-6 gap-6">
            {{-- Estado Consulta --}}

            <!-- <div class="col-span-6 sm:col-span-3">
        <label for="status" class="font-semibold text-gray-700 block pb-1">Estado Consulta</label>
        <input readonly id="status" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                   block w-full shadow-sm sm:text-sm border-gray-900 rounded-md" 
                   type="text" placeholder="" name="status" wire:model="status" required />
        </select>
       
      </div> -->


            {{-- Mal formacion --}}

            <div class="col-span-6 sm:col-span-6 lg:col-span-2 ">
              <label for="malformacion" class="font-semibold text-gray-700 block pb-1">Malformaciones</label>
              <select readonly class="form-multiselect block w-full" multiple id="my-multiselect" wire:model="malformacion" name="malformacion[]">
                @foreach ($malformacion as $malformacio)
                <option readonly disabled>{{ $malformacio->name }}</option>
                @endforeach
              </select>



            </div>



          </div>

        </div>
        <div class="flex justify-center">
          <div class="mb-3 w-96">
            <label for="formFile" class="form-label inline-block mb-2 text-gray-700">Descargar
            </label>
            <button wire:click="export">
              Plantilla
            </button>
          </div>

        </div>
      </div>
    </div>
  </x-slot>

  <x-slot name="buttons">
    <button wire:click="$emit('closeModal')">
      Cerrar
    </button>
  </x-slot>


</x-modal>