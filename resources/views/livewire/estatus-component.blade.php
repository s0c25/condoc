<div class="shadow overflow-hidden sm:rounded-md">
  <div class="px-4 py-5 bg-white sm:p-6">
    <div class="grid grid-cols-6 gap-6">

      {{-- Enfermedad Cronica --}}
      <div class="col-span-6 sm:col-span-3 lg:col-span-2">
        <label for="enfemedadC" class="font-semibold text-gray-700 block pb-1">Enfermedad Cronica</label>
        <select id="enfemedadC" name="enfemedadC" wire:model="enfemedadC" autocomplete="enfemedadC" class="mt-1 block w-full py-2 px-3 border border-gray-300 
         bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
         <option value='' selected disabled require>Selecciona opción</option>
          @foreach ($cronica as $cronic)
          <option value={{ $cronic->id }}>{{ $cronic->name }}</option>
          @endforeach
        </select>
        @error('cronica')
        <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>

      {{-- Alcohol --}}

      <div class="col-span-6 sm:col-span-3">
        <label for="alcohol" class="font-semibold text-gray-700 block pb-1">Consumo de Alcohol</label>
        <select id="alcohol" name="alcohol" autocomplete="" wire:model="alcohol" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm 
        focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value='' selected disabled require>Selecciona opción</option>
          @foreach ($frecuencias as $frecuencia)
          <option value={{ $frecuencia->id }}>{{ $frecuencia->name }}</option>
          @endforeach
        </select>
        @error('alcohol')
        <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>

      {{-- drogas --}}

      <div class="col-span-6 sm:col-span-3 lg:col-span-2 overflow-y-auto h-32">
        <label for="drogas" class="font-semibold text-gray-700 block pb-1">Consumo de Drogas</label>

        <select x-cloak id="select" style="display: none" wire:model="drogas">
        <option selected disabled required></option>
          @foreach ($drogas as $droga)
          <option value={{ $droga->id }}>{{ $droga->name }}</option>
          @endforeach
        </select>
        <div x-data="dropdown()" x-init="loadOptions()" class="">
          <input name="droga" type="hidden" x-bind:value="selectedValues()" wire:model="drogas">
          <div class="inline-block relative w-64">
            <div class="flex flex-col items-center relative">
              <div x-on:click="open" class="w-full  svelte-1l8159u">
                <div class="my-2 p-1 flex border border-gray-200 bg-white rounded svelte-1l8159u">
                  <div class="flex flex-auto flex-wrap">
                    <template x-for="(option,index) in selected" :key="options[option].value">
                      <div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-full text-teal-700 bg-teal-100 border border-teal-300 ">
                        <div class="text-xs font-normal leading-none max-w-full flex-initial x-model=" options[option]" x-text="options[option].text"></div>
                        <div class="flex flex-auto flex-row-reverse">
                          <div x-on:click="remove(index,option)">
                            <svg class="fill-current h-6 w-6 " role="button" viewBox="0 0 20 20">
                              <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                         c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                         l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                         C14.817,13.62,14.817,14.38,14.348,14.849z" />
                            </svg>

                          </div>
                        </div>
                      </div>
                    </template>
                    <div x-show="selected.length == 0" class="flex-1">
                      <input placeholder="" class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800" x-bind:value="selectedValues()">
                    </div>
                  </div>
                  <div class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200 svelte-1l8159u">
                    <button type="button" x-show="isOpen() === true" x-on:click="open" class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                      <svg version="1.1" class="fill-current h-4 w-4" viewBox="0 0 20 20">
                        <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
L17.418,6.109z" />
                      </svg>

                    </button>
                    <button type="button" x-show="isOpen() === false" @click="close" class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                      <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                        <path d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83
c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z
" />
                      </svg>

                    </button>
                  </div>
                </div>
              </div>


              <div class="w-full px-4">
                <div x-show.transition.origin.top="isOpen()" class="absolute shadow top-100 bg-white z-40 w-full lef-0 rounded max-h-select overflow-y-auto svelte-5uyqqj" x-on:click.away="close">
                  <div class="flex flex-col w-full">
                    <template x-for="(option,index) in options" :key="option">
                      <div>
                        <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-teal-100" @click="select(index,$event)">
                          <div x-bind:class="option.selected ? 'border-teal-600' : ''" class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">
                            <div class="w-full items-center flex">
                              <div class="mx-2 leading-6" x-model="option" x-text="option.text">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </template>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>

        @error('drogas')
        <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>

      {{-- tabaco --}}

      <div class="col-span-6 sm:col-span-3">
        <label for="tabaco" class="font-semibold text-gray-700 block pb-1">Consumo de Tabaco</label>
        <select id="tabaco" name="tabaco" autocomplete="" wire:model="tabaco" class="mt-1 block w-full py-2 px-3 border border-gray-300 
         bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
         <option value='' selected disabled required>Selecciona opción</option>
          @foreach ($frecuencias as $frecuencia)
          <option value={{ $frecuencia->id }}>{{ $frecuencia->name }}</option>
          @endforeach
        </select>
        @error('tabaco')
        <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
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

        <select class="form-multiselect block w-full" multiple id="my-multiselect"
         wire:model="sustanciastoxicas" required name="sustanciastoxicas[]">
          <option value='' selected disabled require>Selecciona opción</option>
          @foreach ($toxicos as $toxico)
          <option value={{ $toxico->id }}>{{ $toxico->name }}</option>
          @endforeach
        </select>
       
        @error('sustanciastoxicas')
        <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>

      {{-- Otros
            Tipos de
            Sustanciass --}}

      <div class="col-span-6 sm:col-span-3 lg:col-span-2">
        <label for="otro" class="font-semibold text-gray-700 block pb-1">Otros
          Tipos de
          Sustancias</label>

        <select class="form-multiselect block w-full" multiple id="my-multiselect"   name="otro[]" wire:model="otro" required>
        <option value='' selected disabled required>Selecciona opción</option>
          @foreach ($toxicos as $toxico)
          <option value={{ $toxico->id }}>{{ $toxico->name }}</option>
          @endforeach
        </select>

        @error('otro')
        <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>

      {{-- Observacion --}}
      <div class="col-span-6 sm:col-span-3 lg:col-span-2">
        <label for="observacion" class="font-semibold text-gray-700 block pb-1">Observación</label>
        <div class="flex">
          <input id="observacion" class="border-1  rounded-r px-4 py-2 w-full" type="text" placeholder="Sufre maltrato" name="observacion" wire:model="observacion" required />
        </div>
        @error('observacion')
        <p class="text-sm text-red-600">
          {{ $message }}
        </p>
        @enderror
      </div>



    </div>
    <script>
      function dropdown() {
        return {
          options: [],
          selected: [],
          show: false,
          open() {
            this.show = true
          },
          close() {
            this.show = false
          },
          isOpen() {
            return this.show === true
          },
          select(index, event) {

            if (!this.options[index].selected) {

              this.options[index].selected = true;
              this.options[index].element = event.target;
              this.selected.push(index);

            } else {
              this.selected.splice(this.selected.lastIndexOf(index), 1);
              this.options[index].selected = false
            }
          },
          remove(index, option) {
            this.options[option].selected = false;
            this.selected.splice(index, 1);


          },
          loadOptions() {
            const options = document.getElementById('select').options;
            for (let i = 0; i < options.length; i++) {
              this.options.push({
                value: options[i].value,
                text: options[i].innerText,
                selected: options[i].getAttribute('selected') != null ? options[i].getAttribute(
                  'selected') : false
              });
            }


          },
          selectedValues() {
            return this.selected.map((option) => {
              return this.options[option].value;
            })
          }
        }
      }


      function dropdown1() {
        return {
          options: [],
          selected: [],
          show: false,
          open() {
            this.show = true
          },
          close() {
            this.show = false
          },
          isOpen() {
            return this.show === true
          },
          select1(index, event) {

            if (!this.options[index].selected) {

              this.options[index].selected = true;
              this.options[index].element = event.target;
              this.selected.push(index);

            } else {
              this.selected.splice(this.selected.lastIndexOf(index), 1);
              this.options[index].selected = false
            }
          },
          remove(index, option) {
            this.options[option].selected = false;
            this.selected.splice(index, 1);


          },
          loadOptions1() {
            const options = document.getElementById('select1').options;
            for (let i = 0; i < options.length; i++) {
              this.options.push({
                value: options[i].value,
                text: options[i].innerText,
                selected: options[i].getAttribute('selected') != null ? options[i].getAttribute(
                  'selected') : false
              });
            }


          },
          selectedValues() {
            return this.selected.map((option) => {
              return this.options[option].value;
            })
          }
        }
      }

      function dropdown2() {
        return {
          options: [],
          selected: [],
          show: false,
          open() {
            this.show = true
          },
          close() {
            this.show = false
          },
          isOpen() {
            return this.show === true
          },
          select2(index, event) {

            if (!this.options[index].selected) {

              this.options[index].selected = true;
              this.options[index].element = event.target;
              this.selected.push(index);

            } else {
              this.selected.splice(this.selected.lastIndexOf(index), 1);
              this.options[index].selected = false
            }
          },
          remove(index, option) {
            this.options[option].selected = false;
            this.selected.splice(index, 1);


          },
          loadOptions2() {
            const options = document.getElementById('select2').options;
            for (let i = 0; i < options.length; i++) {
              this.options.push({
                value: options[i].value,
                text: options[i].innerText,
                selected: options[i].getAttribute('selected') != null ? options[i].getAttribute(
                  'selected') : false
              });
            }


          },
          selectedValues() {
            return this.selected.map((option) => {
              return this.options[option].value;
            })
          }
        }
      }
    </script>
  </div>