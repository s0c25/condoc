<style>
    .tab-content {
        display: none;
    }

    .tab-content.active {
        display: block;
    }

</style>
<style>
    [x-cloak] {
        display: none;
    }

</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Paciente') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container mx-auto px-4 sm:px-8">
                    <div class="py-8">
                        <div class="bg-white">
                            <nav class="tabs flex flex-col sm:flex-row">
                                <button data-target="panel-1"
                                    class="tab active text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none text-blue-500 border-b-2 font-medium border-blue-500">
                                    Perfil
                                </button><button data-target="panel-2"
                                    class="tab ext-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
                                    Historia Clinica
                                </button><button data-target="panel-3"
                                    class="tab text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
                                    Observaciones de Consultas
                                </button>
                            </nav>
                        </div>
                        <div id="panels">
                            {{-- panel 1 --}}
                            <div class="active  panel-1 tab-content py-5">
                                <form class="w-full" method="post" action="{{ route('addPaciente') }}">
                                    @csrf
                                    <x-success-message></x-success-message>
                                    <div class="h-full">
                                        <div class="border-b-2 block md:flex">
                                            <div class="w-full md:w-2/5 p-4 sm:p-6 lg:p-8 bg-white shadow-md">
                                                <div class="flex justify-between">
                                                    <span class="text-xl font-semibold block">Nuevo Paciente</span>
                                                </div>
                                                @foreach ($query as $data)
                                                    {{-- cedula --}}
                                                    <div class="pb-6">
                                                        <label for="cedula"
                                                            class="font-semibold text-gray-700 block pb-1">Cedula</label>
                                                        <div class="flex">
                                                            <input id="cedula"
                                                                class="border-1  rounded-r px-4 py-2 w-full" type="text"
                                                                placeholder="00000000" name="cedula"
                                                                value="{{ $data->cedula }}" required />
                                                        </div>
                                                        @error('cedula')
                                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    {{-- name --}}
                                                    <div class="pb-6">
                                                        <label for="name"
                                                            class="font-semibold text-gray-700 block pb-1">Nombre</label>
                                                        <div class="flex">
                                                            <input id="username"
                                                                class="border-1  rounded-r px-4 py-2 w-full" type="text"
                                                                placeholder="Fabiola" name="name"
                                                                value="{{ $data->name }}" required />
                                                        </div>
                                                        @error('name')
                                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    {{-- lastname --}}
                                                    <div class="pb-6">
                                                        <label for="lastname"
                                                            class="font-semibold text-gray-700 block pb-1">Apellido</label>
                                                        <div class="flex">
                                                            <input id="lastname"
                                                                class="border-1  rounded-r px-4 py-2 w-full" type="text"
                                                                placeholder="Rangel" name="lastname"
                                                                value="{{ $data->lastname }}" required />
                                                        </div>
                                                        @error('lastname')
                                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    {{-- phone --}}
                                                    <div class="pb-6">
                                                        <label for="phone"
                                                            class="font-semibold text-gray-700 block pb-1">Telefono</label>
                                                        <div class="flex">
                                                            <input id="phone"
                                                                class="border-1  rounded-r px-4 py-2 w-full"
                                                                type="phone" placeholder="04160000000" name="phone"
                                                                value="{{ $data->phone }}" required />
                                                        </div>
                                                        @error('phone')
                                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    {{-- ocupacion --}}
                                                    <div class="pb-6">
                                                        <label for="ocupacion"
                                                            class="font-semibold text-gray-700 block pb-1">Ocupación</label>
                                                        <div class="flex">
                                                            <input id="ocupacion"
                                                                class="border-1  rounded-r px-4 py-2 w-full" type="text"
                                                                placeholder="Pediatra" name="ocupacion"
                                                                value="{{ $data->ocupacion }}" required />
                                                        </div>
                                                        @error('ocupacion')
                                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <livewire:edit-down-component :ffff="$query">
                                            </div>
                                            @endforeach
                                            {{-- fechas clininas --}}
                                            <div class="w-full md:w-3/5 p-8 bg-gray-200 lg:ml-4 shadow-md">
                                                <div class="flex justify-between">
                                                    <span class="text-xl font-semibold block">Detalles Paciente</span>
                                                </div>
                                                <div class="pb-2">
                                                    <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                                                        <div class="container mx-auto px-4 py-2 md:py-2">
                                                            <div class="mb-5 w-64">
                                                                <label for="datepicker"
                                                                    class="font-bold mb-1 text-gray-700 block">Primera
                                                                    Consulta</label>
                                                                <div class="relative">
                                                                    <input type="hidden" name="date" x-ref="date">
                                                                    <input type="text" readonly
                                                                        x-model="datepickerValue"
                                                                        @click="showDatepicker = !showDatepicker"
                                                                        @keydown.escape="showDatepicker = false"
                                                                        class="w-full pl-4 pr-10 py-3 leading-none rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                                                        placeholder="Select date">
                                                                    <div class="absolute top-0 right-0 px-3 py-2">
                                                                        <svg class="h-6 w-6 text-gray-400" fill="none"
                                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="bg-white mt-12 rounded-lg shadow p-4 absolute top-0 left-0"
                                                                        style="width: 17rem"
                                                                        x-show.transition="showDatepicker"
                                                                        @click.away="showDatepicker = false">
                                                                        <div
                                                                            class="flex justify-between items-center mb-2">
                                                                            <div>
                                                                                <span x-text="MONTH_NAMES[month]"
                                                                                    class="text-lg font-bold text-gray-800"></span>
                                                                                <span x-text="year"
                                                                                    class="ml-1 text-lg text-gray-600 font-normal"></span>
                                                                            </div>
                                                                            <div>
                                                                                <button type="button"
                                                                                    class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full"
                                                                                    :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                                                                    :disabled="month == 0 ? true : false"
                                                                                    @click="month--; getNoOfDays()">
                                                                                    <svg class="h-6 w-6 text-gray-500 inline-flex"
                                                                                        fill="none" viewBox="0 0 24 24"
                                                                                        stroke="currentColor">
                                                                                        <path stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="2"
                                                                                            d="M15 19l-7-7 7-7" />
                                                                                    </svg>
                                                                                </button>
                                                                                <button type="button"
                                                                                    class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full"
                                                                                    :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                                                                    :disabled="month == 11 ? true : false"
                                                                                    @click="month++; getNoOfDays()">
                                                                                    <svg class="h-6 w-6 text-gray-500 inline-flex"
                                                                                        fill="none" viewBox="0 0 24 24"
                                                                                        stroke="currentColor">
                                                                                        <path stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="2"
                                                                                            d="M9 5l7 7-7 7" />
                                                                                    </svg>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex flex-wrap mb-3 -mx-1">
                                                                            <template x-for="(day, index) in DAYS"
                                                                                :key="index">
                                                                                <div style="width: 14.26%" class="px-1">
                                                                                    <div x-text="day"
                                                                                        class="text-gray-800 font-medium text-center text-xs">
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
                                                                            <template
                                                                                x-for="(date, dateIndex) in no_of_days"
                                                                                :key="dateIndex">
                                                                                <div style="width: 14.28%"
                                                                                    class="px-1 mb-1">
                                                                                    <div @click="getDateValue(date)"
                                                                                        x-text="date"
                                                                                        class="cursor-pointer text-center text-sm leading-none rounded-full leading-loose transition ease-in-out duration-100"
                                                                                        :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }">
                                                                                    </div>
                                                                                </div>
                                                                            </template>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pb-4">
                                                    <div class="pb-2">
                                                        <div x-data="app()" x-init="[initDate(), getNoOfDays()]"
                                                            x-cloak>
                                                            <div class="container mx-auto px-4 py-2 md:py-2">
                                                                <div class="mb-5 w-64">
                                                                    <label for="datepicker"
                                                                        class="font-bold mb-1 text-gray-700 block">Proxima
                                                                        Consulta</label>
                                                                    <div class="relative">
                                                                        <input type="hidden" name="date" x-ref="date">
                                                                        <input type="text" readonly
                                                                            x-model="datepickerValue"
                                                                            @click="showDatepicker = !showDatepicker"
                                                                            @keydown.escape="showDatepicker = false"
                                                                            class="w-full pl-4 pr-10 py-3 leading-none rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                                                            placeholder="Select date">
                                                                        <div class="absolute top-0 right-0 px-3 py-2">
                                                                            <svg class="h-6 w-6 text-gray-400"
                                                                                fill="none" viewBox="0 0 24 24"
                                                                                stroke="currentColor">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"
                                                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                                            </svg>
                                                                        </div>
                                                                        <div class="bg-white mt-12 rounded-lg shadow p-4 absolute top-0 left-0"
                                                                            style="width: 17rem"
                                                                            x-show.transition="showDatepicker"
                                                                            @click.away="showDatepicker = false">
                                                                            <div
                                                                                class="flex justify-between items-center mb-2">
                                                                                <div>
                                                                                    <span x-text="MONTH_NAMES[month]"
                                                                                        class="text-lg font-bold text-gray-800"></span>
                                                                                    <span x-text="year"
                                                                                        class="ml-1 text-lg text-gray-600 font-normal"></span>
                                                                                </div>
                                                                                <div>
                                                                                    <button type="button"
                                                                                        class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full"
                                                                                        :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                                                                        :disabled="month == 0 ? true : false"
                                                                                        @click="month--; getNoOfDays()">
                                                                                        <svg class="h-6 w-6 text-gray-500 inline-flex"
                                                                                            fill="none"
                                                                                            viewBox="0 0 24 24"
                                                                                            stroke="currentColor">
                                                                                            <path stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                stroke-width="2"
                                                                                                d="M15 19l-7-7 7-7" />
                                                                                        </svg>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full"
                                                                                        :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                                                                        :disabled="month == 11 ? true : false"
                                                                                        @click="month++; getNoOfDays()">
                                                                                        <svg class="h-6 w-6 text-gray-500 inline-flex"
                                                                                            fill="none"
                                                                                            viewBox="0 0 24 24"
                                                                                            stroke="currentColor">
                                                                                            <path stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                stroke-width="2"
                                                                                                d="M9 5l7 7-7 7" />
                                                                                        </svg>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="flex flex-wrap mb-3 -mx-1">
                                                                                <template x-for="(day, index) in DAYS"
                                                                                    :key="index">
                                                                                    <div style="width: 14.26%"
                                                                                        class="px-1">
                                                                                        <div x-text="day"
                                                                                            class="text-gray-800 font-medium text-center text-xs">
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
                                                                                <template
                                                                                    x-for="(date, dateIndex) in no_of_days"
                                                                                    :key="dateIndex">
                                                                                    <div style="width: 14.28%"
                                                                                        class="px-1 mb-1">
                                                                                        <div @click="getDateValue(date)"
                                                                                            x-text="date"
                                                                                            class="cursor-pointer text-center text-sm leading-none rounded-full leading-loose transition ease-in-out duration-100"
                                                                                            :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }">
                                                                                        </div>
                                                                                    </div>
                                                                                </template>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div
                                                        class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                                                        <button
                                                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                                            Create
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                            {{-- panel 2 --}}
                            <div class="panel-2 tab-content py-5">
                            </div>
                            {{-- panel 3 --}}
                            <div class="panel-3 tab-content py-5">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const tabs = document.querySelectorAll(".tabs");
        const tab = document.querySelectorAll(".tab");
        const panel = document.querySelectorAll(".tab-content");

        function onTabClick(event) {

            for (let i = 0; i < tab.length; i++) {
                tab[i].classList.remove("active");
            }

            for (let i = 0; i < panel.length; i++) {
                panel[i].classList.remove("active");
            }


            event.target.classList.add('active');
            let classString = event.target.getAttribute('data-target');
            console.log(classString);
            document.getElementById('panels').getElementsByClassName(classString)[0].classList.add("active");
        }

        for (let i = 0; i < tab.length; i++) {
            tab[i].addEventListener('click', onTabClick, false);
        }

        const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
            'October', 'November', 'December'
        ];
        const DAYS = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

        function app() {
            return {
                showDatepicker: false,
                datepickerValue: '',

                month: '',
                year: '',
                no_of_days: [],
                blankdays: [],
                days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

                initDate() {
                    let today = new Date();
                    this.month = today.getMonth();
                    this.year = today.getFullYear();
                    this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
                },

                isToday(date) {
                    const today = new Date();
                    const d = new Date(this.year, this.month, date);

                    return today.toDateString() === d.toDateString() ? true : false;
                },

                getDateValue(date) {
                    let selectedDate = new Date(this.year, this.month, date);
                    this.datepickerValue = selectedDate.toDateString();

                    this.$refs.date.value = selectedDate.getFullYear() + "-" + ('0' + selectedDate.getMonth()).slice(-
                        2) + "-" + ('0' + selectedDate.getDate()).slice(-2);

                    console.log(this.$refs.date.value);

                    this.showDatepicker = false;
                },

                getNoOfDays() {
                    let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                    // find where to start calendar day of week
                    let dayOfWeek = new Date(this.year, this.month).getDay();
                    let blankdaysArray = [];
                    for (var i = 1; i <= dayOfWeek; i++) {
                        blankdaysArray.push(i);
                    }

                    let daysArray = [];
                    for (var i = 1; i <= daysInMonth; i++) {
                        daysArray.push(i);
                    }

                    this.blankdays = blankdaysArray;
                    this.no_of_days = daysArray;
                }
            }
        }

    </script>
</x-app-layout>
