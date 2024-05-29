<div x-data="{
    datePickerOpen: false,
    datePickerValue: '',
    datePickerFormat: 'M d, Y',
    datePickerMonth: '',
    datePickerYear: '',
    datePickerDay: '',
    datePickerDaysInMonth: [],
    datePickerBlankDaysInMonth: [],
    datePickerMonthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    datePickerDays: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
    datePickerDayClicked(day) {
        let selectedDate = new Date(this.datePickerYear, this.datePickerMonth, day);
        this.datePickerDay = day;
        this.datePickerValue = this.datePickerFormatDate(selectedDate);
        this.datePickerIsSelectedDate(day);
        this.datePickerOpen = false;
    },
    datePickerPreviousMonth() {
        if (this.datePickerMonth == 0) {
            this.datePickerYear--;
            this.datePickerMonth = 12;
        }
        this.datePickerMonth--;
        this.datePickerCalculateDays();
    },
    datePickerNextMonth() {
        if (this.datePickerMonth == 11) {
            this.datePickerMonth = 0;
            this.datePickerYear++;
        } else {
            this.datePickerMonth++;
        }
        this.datePickerCalculateDays();
    },
    datePickerIsSelectedDate(day) {
        const d = new Date(this.datePickerYear, this.datePickerMonth, day);
        return this.datePickerValue === this.datePickerFormatDate(d) ? true : false;
    },
    datePickerIsToday(day) {
        const today = new Date();
        const d = new Date(this.datePickerYear, this.datePickerMonth, day);
        return today.toDateString() === d.toDateString() ? true : false;
    },
    datePickerCalculateDays() {
        let daysInMonth = new Date(this.datePickerYear, this.datePickerMonth + 1, 0).getDate();
        // find where to start calendar day of week
        let dayOfWeek = new Date(this.datePickerYear, this.datePickerMonth).getDay();
        let blankdaysArray = [];
        for (var i = 1; i <= dayOfWeek; i++) {
            blankdaysArray.push(i);
        }
        let daysArray = [];
        for (var i = 1; i <= daysInMonth; i++) {
            daysArray.push(i);
        }
        this.datePickerBlankDaysInMonth = blankdaysArray;
        this.datePickerDaysInMonth = daysArray;
    },
    datePickerFormatDate(date) {
        let formattedDay = this.datePickerDays[date.getDay()];
        let formattedDate = ('0' + date.getDate()).slice(-2); // appends 0 (zero) in single digit date
        let formattedMonth = this.datePickerMonthNames[date.getMonth()];
        let formattedMonthShortName = this.datePickerMonthNames[date.getMonth()].substring(0, 3);
        let formattedMonthInNumber = ('0' + (parseInt(date.getMonth()) + 1)).slice(-2);
        let formattedYear = date.getFullYear();

        if (this.datePickerFormat === 'M d, Y') {
            return `${formattedMonthShortName} ${formattedDate}, ${formattedYear}`;
        }
        if (this.datePickerFormat === 'MM-DD-YYYY') {
            return `${formattedMonthInNumber}-${formattedDate}-${formattedYear}`;
        }
        if (this.datePickerFormat === 'DD-MM-YYYY') {
            return `${formattedDate}-${formattedMonthInNumber}-${formattedYear}`;
        }
        if (this.datePickerFormat === 'YYYY-MM-DD') {
            return `${formattedYear}-${formattedMonthInNumber}-${formattedDate}`;
        }
        if (this.datePickerFormat === 'D d M, Y') {
            return `${formattedDay} ${formattedDate} ${formattedMonthShortName} ${formattedYear}`;
        }

        return `${formattedMonth} ${formattedDate}, ${formattedYear}`;
    },
}" x-init="currentDate = new Date();
if (datePickerValue) {
    currentDate = new Date(Date.parse(datePickerValue));
}
datePickerMonth = currentDate.getMonth();
datePickerYear = currentDate.getFullYear();
datePickerDay = currentDate.getDay();
datePickerValue = datePickerFormatDate(currentDate);
datePickerCalculateDays();" x-cloak>
  <div class="container mx-auto px-4 py-2 md:py-10">
    <div class="mb-5 w-full">
      <label for="datepicker" class="mb-1 block text-sm font-medium text-neutral-500">Select Date</label>
      <div class="relative w-[17rem]">
        <input x-ref="datePickerInput" type="text" x-model="datePickerValue" x-on:keydown.escape="datePickerOpen=false"
          class="ring-offset-background flex h-10 w-full rounded-md border border-neutral-300 bg-white px-3 py-2 text-sm text-neutral-600 placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-neutral-400 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
          placeholder="Select date" readonly @click="datePickerOpen=!datePickerOpen" />
        <div class="absolute right-0 top-0 cursor-pointer px-3 py-2 text-neutral-400 hover:text-neutral-500"
          @click="datePickerOpen=!datePickerOpen; if(datePickerOpen){ $refs.datePickerInput.focus() }">
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
        </div>
        <div x-show="datePickerOpen" x-transition
          class="absolute left-0 top-0 mt-12 w-[17rem] max-w-lg rounded-lg border border-neutral-200/70 bg-white p-4 antialiased shadow"
          @click.away="datePickerOpen = false">
          <div class="mb-2 flex items-center justify-between">
            <div>
              <span x-text="datePickerMonthNames[datePickerMonth]" class="text-lg font-bold text-gray-800"></span>
              <span x-text="datePickerYear" class="ml-1 text-lg font-normal text-gray-600"></span>
            </div>
            <div>
              <button type="button"
                class="focus:shadow-outline inline-flex cursor-pointer rounded-full p-1 transition duration-100 ease-in-out hover:bg-gray-100 focus:outline-none"
                @click="datePickerPreviousMonth()">
                <svg class="inline-flex h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
              </button>
              <button type="button"
                class="focus:shadow-outline inline-flex cursor-pointer rounded-full p-1 transition duration-100 ease-in-out hover:bg-gray-100 focus:outline-none"
                @click="datePickerNextMonth()">
                <svg class="inline-flex h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
              </button>
            </div>
          </div>
          <div class="mb-3 grid grid-cols-7">
            <template x-for="(day, index) in datePickerDays" :key="index">
              <div class="px-0.5">
                <div x-text="day" class="text-center text-xs font-medium text-gray-800"></div>
              </div>
            </template>
          </div>
          <div class="grid grid-cols-7">
            <template x-for="blankDay in datePickerBlankDaysInMonth">
              <div class="border border-transparent p-1 text-center text-sm"></div>
            </template>
            <template x-for="(day, dayIndex) in datePickerDaysInMonth" :key="dayIndex">
              <div class="mb-1 aspect-square px-0.5">
                <div x-text="day"
                  :class="{
                      'bg-neutral-200': datePickerIsToday(day) == true,
                      'text-gray-600 hover:bg-neutral-200': datePickerIsToday(day) == false && datePickerIsSelectedDate(
                          day) == false,
                      'bg-neutral-800 text-white hover:bg-opacity-75': datePickerIsSelectedDate(day) == true
                  }"
                  class="flex h-7 w-7 cursor-pointer items-center justify-center rounded-full text-center text-sm leading-none"
                  @click="datePickerDayClicked(day)"></div>
              </div>
            </template>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
