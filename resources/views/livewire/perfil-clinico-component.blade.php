<div class="col-span-6 sm:col-span-3">
    <label for="status" class="block text-sm font-medium text-gray-700">Estado Paciente</label>
    <select id="status" name="status" autocomplete="status"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value=''></option>
        @foreach ($status as $statu)
            <option value={{ $statu->id }}>{{ $statu->name }}</option>
        @endforeach
    </select>
    @error('status')
        <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
<div class="pb-6">

    <select x-cloak id="select" style="display: none">
        <option value=''></option>
        @foreach ($status as $statu)
            <option value={{ $statu->id }}>{{ $statu->name }}</option>
        @endforeach
    </select>
    <div x-data="dropdown()" x-init="loadOptions()" class="w-full md:w-1/2 flex flex-col items-center mx-auto">
        <input name="droga" type="hidden" x-bind:value="selectedValues()">
        <div class="inline-block relative w-64">
            <div class="flex flex-col items-center relative">
                <div x-on:click="open" class="w-full  svelte-1l8159u">
                    <div class="my-2 p-1 flex border border-gray-200 bg-white rounded svelte-1l8159u">
                        <div class="flex flex-auto flex-wrap">
                            <template x-for="(option,index) in selected" :key="options[option].value">
                                <div
                                    class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-full text-teal-700 bg-teal-100 border border-teal-300 ">
                                    <div class="text-xs font-normal leading-none max-w-full flex-initial x-model="
                                        options[option]" x-text="options[option].text"></div>
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
                            <div x-show="selected.length    == 0" class="flex-1">
                                <input placeholder="Select a option"
                                    class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800"
                                    x-bind:value="selectedValues()">
                            </div>
                        </div>
                        <div
                            class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200 svelte-1l8159u">

                            <button type="button" x-show="isOpen() === true" x-on:click="open"
                                class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                <svg version="1.1" class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                    <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
L17.418,6.109z" />
                                </svg>

                            </button>
                            <button type="button" x-show="isOpen() === false" @click="close"
                                class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
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
                    <div x-show.transition.origin.top="isOpen()"
                        class="absolute shadow top-100 bg-white z-40 w-full lef-0 rounded max-h-select overflow-y-auto svelte-5uyqqj"
                        x-on:click.away="close">
                        <div class="flex flex-col w-full">
                            <template x-for="(option,index) in options" :key="option">
                                <div>
                                    <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-teal-100"
                                        @click="select(index,$event)">
                                        <div x-bind:class="option.selected ? 'border-teal-600' : ''"
                                            class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">
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










    {{-- fecha proxima consulta --}}
    <div class="">
        <div class=" antialiased sans-serif bg-gray-200">
            <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                <div class="mb-5 w-64">
                    <div class="mt-4">
                        <div class="mt-2">

                            @livewire('estatus-component')
                            <label for="datepicker" class="font-bold mb-1 text-gray-700 block">Proxima
                                Consulta</label>
                            <div class="relative">
                                <input type="hidden" name="date" x-ref="date" :value="datepickerValue" />
                                <input type="text" x-on:click="showDatepicker = !showDatepicker"
                                    x-model="datepickerValue" x-on:keydown.escape="showDatepicker = false"
                                    class="w-full pl-4 pr-10 py-3 leading-none rounded-lg shadow-sm focus:outline-none text-gray-600 font-medium focus:ring focus:ring-blue-600 focus:ring-opacity-50"
                                    placeholder="Select date" readonly />

                                <div class="absolute top-0 right-0 px-3 py-2">
                                    <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>

                                <!-- <div x-text="no_of_days.length"></div>
                    <div x-text="32 - new Date(year, month, 32).getDate()"></div>
                    <div x-text="new Date(year, month).getDay()"></div> -->

                                <div class="bg-white mt-12 rounded-lg shadow p-4 absolute top-0 left-0"
                                    style="width: 17rem" x-show.transition="showDatepicker"
                                    @click.away="showDatepicker = false">
                                    <div class="flex justify-between items-center mb-2">
                                        <div>
                                            <span x-text="MONTH_NAMES[month]"
                                                class="text-lg font-bold text-gray-800"></span>
                                            <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                                        </div>
                                        <div>
                                            <button type="button"
                                                class="focus:outline-none focus:shadow-outline transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-100 p-1 rounded-full"
                                                @click="if (month == 0) {
                                year--;
                                month = 12;
                              } month--; getNoOfDays()">
                                                <svg class="h-6 w-6 text-gray-400 inline-flex" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 19l-7-7 7-7" />
                                                </svg>
                                            </button>
                                            <button type="button"
                                                class="focus:outline-none focus:shadow-outline transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-100 p-1 rounded-full"
                                                @click="if (month == 11) {
                                month = 0; 
                                year++;
                              } else {
                                month++; 
                              } getNoOfDays()">
                                                <svg class="h-6 w-6 text-gray-400 inline-flex" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M9 5l7 7-7 7" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex flex-wrap mb-3 -mx-1">
                                        <template x-for="(day, index) in DAYS" :key="index">
                                            <div style="width: 14.26%" class="px-0.5">
                                                <div x-text="day" class="text-gray-800 font-medium text-center text-xs">
                                                </div>
                                            </div>
                                        </template>
                                    </div>

                                    <div class="flex flex-wrap -mx-1">
                                        <template x-for="blankday in blankdays">
                                            <div style="width: 14.28%"
                                                class="text-center border p-1 border-transparent text-sm">
                                            </div>
                                        </template>
                                        <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                            <div style="width: 14.28%" class="px-1 mb-1">
                                                <div @click="getDateValue(date)" x-text="date"
                                                    class="cursor-pointer text-center text-sm leading-none rounded-full leading-loose transition ease-in-out duration-100"
                                                    :class="{
                              'bg-indigo-200': isToday(date) == true, 
                              'text-gray-600 hover:bg-indigo-200': isToday(date) == false && isSelectedDate(date) == false,
                              'bg-indigo-500 text-white hover:bg-opacity-75': isSelectedDate(date) == true 
                            }"></div>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{-- alcohol --}}
    <div class="pb-6">
        <label for="alcohol" class="font-semibold text-gray-700 block pb-1">Consumo
            de Alcohol</label>
        <div class="flex">
            <input id="alcohol" class="border-1  rounded-r px-4 py-2 w-full" type="text" placeholder="Si" name="alcohol"
                value="{{ old('alcohol', '') }}" required />
        </div>
        @error('alcohol')
            <p class="text-sm text-red-600">
                {{ $message }}</p>
        @enderror
    </div>

    {{-- tabaco --}}
    <div class="pb-6">
        <label for="tabaco" class="font-semibold text-gray-700 block pb-1">Consumo
            de Tabaco</label>
        <div class="flex">
            <input id="edad" class="border-1  rounded-r px-4 py-2 w-full" type="text" placeholder="Si" name="tabaco"
                value="{{ old('tabaco', '') }}" required />
        </div>
        @error('tabaco')
            <p class="text-sm text-red-600">
                {{ $message }}</p>
        @enderror
    </div>

    {{-- sustanciastoxicas --}}
    <div class="pb-6">
        <label for="sustanciastoxicas" class="font-semibold text-gray-700 block pb-1">Exposición
            a
            Sustancias
            Tóxicas</label>
        <div class="flex">
            <input id="sustanciastoxicas" class="border-1  rounded-r px-4 py-2 w-full" type="text" placeholder="Plomo"
                name="sustanciastoxicas" value="{{ old('sustanciastoxicas', '') }}" required />
        </div>
        @error('sustanciastoxicas')
            <p class="text-sm text-red-600">
                {{ $message }}</p>
        @enderror
    </div>

    {{-- otro --}}
    <div class="pb-6">
        <label for="sustanciastoxicas" class="font-semibold text-gray-700 block pb-1">Otros
            Tipos de
            Sustancias</label>
        <div class="flex">
            <input id="otro" class="border-1  rounded-r px-4 py-2 w-full" type="text" placeholder="Radiacion"
                name="otro" value="{{ old('otro', '') }}" required />
        </div>
        @error('otro')
            <p class="text-sm text-red-600">
                {{ $message }}</p>
        @enderror
    </div>

    {{-- Observacion --}}
    <div class="pb-6">
        <label for="observacion" class="font-semibold text-gray-700 block pb-1">Observación</label>
        <div class="flex">
            <input id="observacion" class="border-1  rounded-r px-4 py-2 w-full" type="text"
                placeholder="Sufre maltrato" name="observacion" value="{{ old('observacion', '') }}" required />
        </div>
        @error('observacion')
            <p class="text-sm text-red-600">
                {{ $message }}</p>
        @enderror
    </div>

    <div class="pb-1">
        <div class="flex">
            <div class="flex items-center justify-center bg-grey-lighter">
                <button
                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                    Crear
                </button>
                <label
                    class="inline-flex items-center mx-4 px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-500 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                    </svg>
                    <span class="mt-2 text-base leading-normal">Anexar
                        Plantilla</span>
                    <input type='file' class="hidden" />
                </label>

            </div>

        </div>

    </div>

</div>

</div>
</div>
</div>
</div>
</div>


<div class="w-full md:w-3/5 p-8 bg-gray-200 lg:ml-4 shadow-md">
    <div class="flex justify-between">
        <span class="text-xl font-semibold block">Datos
            Biopsicosociales</span>
    </div>
