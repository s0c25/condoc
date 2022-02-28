<style>
    .tab-content {
        display: none;
    }

    .tab-content.active {
        display: block;
    }

</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow-sm sm:rounded-lg">
            <div class="container mx-auto px-4 sm:px-8">
                <div class="py-8">
                    <div class="py-12 mx-5" x-data="{openTab: 1, activeClasses: 'border-l border-t border-r rounded-t text-white border-gray-500',
          inactiveClasses: 'text-white-500 hover:text-red-200'}" class="px-6">
                        <ul class="flex">

                            <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
                                <a :class="openTab === 1 ? activeClasses : inactiveClasses"
                                    class="bg-gray-500 inline-block py-2 px-4 font-semibold" href="#">
                                    Mal Formaciones
                                </a>
                            </li>

                            <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="-mb-px mr-1">
                                <a :class="openTab === 2 ? activeClasses : inactiveClasses"
                                    class="bg-gray-500 inline-block py-2 px-4 font-semibold" href="#">
                                    Enfermedad Cronica
                                </a>
                            </li>
                        </ul>
                        <div id="panels">

                            <div class="w-full pt-2">
                                <div x-show="openTab === 1">
                                    @livewire('mal-formacion-component')
                                </div>
                            </div>
                            <div class="w-full pt-2">
                                <div x-show="openTab === 2">
                                    @livewire('enfermedad-cronica-component')
                                </div>
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

            // deactivate existing active tabs and panel

            for (let i = 0; i < tab.length; i++) {
                tab[i].classList.remove("active");
            }

            for (let i = 0; i < panel.length; i++) {
                panel[i].classList.remove("active");
            }


            // activate new tabs and panel
            event.target.classList.add('active');
            let classString = event.target.getAttribute('data-target');
            console.log(classString);
            document.getElementById('panels').getElementsByClassName(classString)[0].classList
                .add(
                    "active");
        }

        for (let i = 0; i < tab.length; i++) {
            tab[i].addEventListener('click', onTabClick, false);
        }

    </script>
</x-app-layout>
