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
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-4">
    <div class="container mx-auto px-4 sm:px-8 overflow-hidden shadow-sm sm:rounded-lg">
      <div class="py-8 ">
        <div class="bg-white rounded-lg">
          <div class="py-12 mx-5" x-data="{openTab: 1, activeClasses: 'border-l border-t border-r rounded-t text-blue-700',
         inactiveClasses: 'text-blue-500 hover:text-blue-800'}" class="px-6">
            <ul class="flex border-b">
              <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
                <a :class="openTab === 1 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#">
                  Perfil Medico
                </a>
              </li>
              <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
                <a :class="openTab === 2 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#"> Perfil Clinico
                </a>
              </li>
              <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
                <a :class="openTab === 3 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#"> Diagnostico
                </a>
              </li>

            </ul>
            <div class="w-full pt-2">
              <div x-show="openTab === 1">
                <div class="overflow-y-auto ">
                  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                      <div class="container mx-auto px-4 sm:px-8">
                        <div class="py-2 overflow-y-auto ">
                          <form class="w-full" method="post" enctype="multipart/form-data" action="{{ route('addPaciente') }}">
                            @csrf
                            <x-success-message></x-success-message>

                            <div class="grid grid-cols-2 gap-4">
                              <div>@livewire('valid-paciente-form')</div>
                              <div>@livewire('estatus-component')</div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div x-show="openTab === 3">
                <div class="overflow-y-auto ">
                  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                      <div class="container mx-auto px-4 sm:px-8">
                        <div class="py-2 overflow-y-auto ">
                          <x-success-message></x-success-message>

                          <div class="grid grid-cols-2 gap-4">
                            <div>@livewire('perfil-clinico-form')</div>
                            <div>@livewire('perfil-clinico2-form')</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div x-show="openTab === 2">
                <div class="overflow-y-auto ">
                  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                      <div class="container mx-auto px-4 sm:px-8">
                        <div class="py-2 overflow-y-auto ">
                          <x-success-message></x-success-message>

                          <div class="grid grid-cols-2 gap-4">
                            @livewire('diagnostico-component')
                            <p>jgf</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>

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
      document.getElementById('panels').getElementsByClassName(classString)[0].classList.add(
        "active");
    }

    for (let i = 0; i < tab.length; i++) {
      tab[i].addEventListener('click', onTabClick, false);
    }

    const MONTH_NAMES = [
      "Enero",
      "Febrero",
      "Marzo",
      "Abril",
      "Mayo",
      "Junio",
      "Julio",
      "Agosto",
      "Septiembre",
      "Octubre",
      "Noviembre",
      "Diciembre",
    ];
    const MONTH_SHORT_NAMES = [
      "Ene",
      "Feb",
      "Mar",
      "Abr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Nov",
      "Dic",
    ];
    const DAYS = ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"];

    function app() {
      return {
        showDatepicker: false,
        datepickerValue: "",
        selectedDate: "2021-02-04",
        dateFormat: "DD-MM-YYYY",
        month: "",
        year: "",
        no_of_days: [],
        blankdays: [],
        initDate() {
          let today;
          if (this.selectedDate) {
            today = new Date(Date.parse(this.selectedDate));
          } else {
            today = new Date();
          }
          this.month = today.getMonth();
          this.year = today.getFullYear();
          this.datepickerValue = this.formatDateForDisplay(
            today
          );
        },
        formatDateForDisplay(date) {
          let formattedDay = DAYS[date.getDay()];
          let formattedDate = ("0" + date.getDate()).slice(
            -2
          ); // appends 0 (zero) in single digit date
          let formattedMonth = MONTH_NAMES[date.getMonth()];
          let formattedMonthShortName =
            MONTH_SHORT_NAMES[date.getMonth()];
          let formattedMonthInNumber = (
            "0" +
            (parseInt(date.getMonth()) + 1)
          ).slice(-2);
          let formattedYear = date.getFullYear();
          if (this.dateFormat === "DD-MM-YYYY") {
            return `${formattedDate}-${formattedMonthInNumber}-${formattedYear}`; // 02-04-2021
          }
          if (this.dateFormat === "YYYY-MM-DD") {
            return `${formattedYear}-${formattedMonthInNumber}-${formattedDate}`; // 2021-04-02
          }
          if (this.dateFormat === "D d M, Y") {
            return `${formattedDay} ${formattedDate} ${formattedMonthShortName} ${formattedYear}`; // Tue 02 Mar 2021
          }
          return `${formattedDay} ${formattedDate} ${formattedMonth} ${formattedYear}`;
        },
        isSelectedDate(date) {
          const d = new Date(this.year, this.month, date);
          return this.datepickerValue ===
            this.formatDateForDisplay(d) ?
            true :
            false;
        },
        isToday(date) {
          const today = new Date();
          const d = new Date(this.year, this.month, date);
          return today.toDateString() === d.toDateString() ?
            true :
            false;
        },
        getDateValue(date) {
          let selectedDate = new Date(
            this.year,
            this.month,
            date
          );
          this.datepickerValue = this.formatDateForDisplay(
            selectedDate
          );
          // this.$refs.date.value = selectedDate.getFullYear() + "-" + ('0' + formattedMonthInNumber).slice(-2) + "-" + ('0' + selectedDate.getDate()).slice(-2);
          this.isSelectedDate(date);
          this.showDatepicker = false;
        },
        getNoOfDays() {
          let daysInMonth = new Date(
            this.year,
            this.month + 1,
            0
          ).getDate();
          // find where to start calendar day of week
          let dayOfWeek = new Date(
            this.year,
            this.month
          ).getDay();
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
        },
      };
    }
  </script>
</x-app-layout>