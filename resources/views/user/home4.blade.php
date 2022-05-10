@extends('user.master')
@section('body')
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="row tab-manu">
        <div class="col active">Esittely</div>
        <div class="col">Menu & Tilaa</div>
        <div class="col">Varaa pöytä</div>
        <div class="col">Arvostelut</div>
    </div>
    <div class="row mt-4 justify-content-center align-items-center">
        <div class="row body-text col-lg-10">
            <div class="col-4 text-start body-text image">
                <img src=" {{ asset('img/spash-white.png') }}" class="img-fluid img">
            </div>
            <div class="col-4 text-start">
                <h2>Henkilöitä</h2>
            </div>
            <div class="col-4 text-start demo text-center">
                <span class="icon"><i class="fas fa-plus"></i></span>
                <span>2</span>
                <span class="icon"><i class="fas fa-minus"></i></span>
            </div>
        </div>
    </div>
    <div class="row mt-4 justify-content-center align-items-center">
        <div class="row body-text col-lg-10">
            <div class="col-8 text-start ">
                <div class="calendar">
                    <div class="calendar-header">
                        <span class="month-picker" id="month-picker">February</span>
                        <div class="year-picker">
                            <span class="year-change" id="prev-year">
                                <pre></pre>
                            </span>
                            <span id="year"></span>
                            <span class="year-change" id="next-year">
                                <pre>></pre>
                            </span>
                        </div>
                    </div>
                    <div class="calendar-body">
                        <div class="calendar-week-day">
                            <div>Sun</div>
                            <div>Mon</div>
                            <div>Tue</div>
                            <div>Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                        </div>
                        <div class="calendar-days"></div>
                    </div>
                    <div class="calendar-footer">
                    </div>
                    <div class="month-list"></div>
                </div>
            </div>
            <div class="col-4 time-height text-start">
                <div class="row ctime">
                    <div class="col text-center">
                        <p>Valitse</p>
                        <h3>Tulo</h3>
                        <h3 class="primary">13.30</h3>
                    </div>
                </div>
                <div class="row ctime">
                    <div class="col text-center">
                        <p>Valitse</p>
                        <h3>Tulo</h3>
                        <h3 class="primary">13.30</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row mt-4 justify-content-center align-items-center">
        <div class="card">
            <h5 class="card-header">Ominaisuudet</h5>
            <div class="card-body">
                <div class="row pt-2 bg-dark">
                    <div class="col">
                        <div class="text-start ">
                            <p><span class="pe-2"><i class="fas fa-plus primary-icon"></i></span>WIFI-verkko</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-start">
                            <p><span class="pe-2"><i class="fas fa-calendar primary-icon"></i></span>WIFI-verkko
                            </p>

                        </div>
                    </div>
                    <div class="col">
                        <div class="text-start">
                            <p><span class="pe-2"><i class="fas fa-clock primary-icon"></i></span>WIFI-verkko</p>
                        </div>
                    </div>

                </div>
                <div class="row mt-2 bg-light ">
                    <h2><b>Yhteystiedot</b></h2>
                    <form>

                        <div class="mb-3 form-group has-search">
                            <span class="fa fa-user-circle-o form-control-feedback"></span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>

                        <div class="mb-3 form-group has-search">
                            <span class="fa fa-at form-control-feedback"></span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <div class="mb-3 form-group has-search">
                            <span class="fa fa-phone form-control-feedback"></span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <p class="text-center mb-3"><b>Yhteystiedot</b></p>
                        <div class="row mb-3 justify-content-center align-items-center">
                            <div class="col image">
                                <img src=" {{ asset('img/spash-white.png') }}" class="img-fluid img1">
                                <span class="primary-text">Terassikesätili</span>
                            </div>
                            <div class="col image2">
                                <img src=" {{ asset('img/google.jpg') }}" class="img-fluid img2">
                                <span class="white-text">Google</span>
                            </div>
                            <div class="col">
                                <img src=" {{ asset('img/facebook.png') }}" class="img-fluid img2">
                                <span class="white-text">Google</span>
                            </div>
                        </div>
                        <div class="mb-3 form-check text-start">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Hyväksyn Terassikesän Toimitus-ja
                                käyttöehdot sekä tietosuojaselosteen</label>
                        </div>
                        <button type="submit" class="btn btn-warning btn-lg">Varaa pöytä</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="card">

            <div class="card-body">
                <img src="{{ asset('img/img1.png') }}" class="img-fluid">
            </div>


        </div>
    </div>
    <script>
        let calendar = document.querySelector('.calendar')

        const month_names = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
            'October', 'November', 'December'
        ]

        isLeapYear = (year) => {
            return (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) || (year % 100 === 0 && year % 400 === 0)
        }

        getFebDays = (year) => {
            return isLeapYear(year) ? 29 : 28
        }

        generateCalendar = (month, year) => {

            let calendar_days = calendar.querySelector('.calendar-days')
            let calendar_header_year = calendar.querySelector('#year')

            let days_of_month = [31, getFebDays(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

            calendar_days.innerHTML = ''

            let currDate = new Date()
            if (!month) month = currDate.getMonth()
            if (!year) year = currDate.getFullYear()

            let curr_month = `${month_names[month]}`
            month_picker.innerHTML = curr_month
            calendar_header_year.innerHTML = year

            // get first day of month

            let first_day = new Date(year, month, 1)

            for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 1; i++) {
                let day = document.createElement('div')
                if (i >= first_day.getDay()) {
                    day.classList.add('calendar-day-hover')
                    day.innerHTML = i - first_day.getDay() + 1
                    day.innerHTML += `<span></span>
                            <span></span>
                            <span></span>
                            <span></span>`
                    if (i - first_day.getDay() + 1 === currDate.getDate() && year === currDate.getFullYear() &&
                        month === currDate.getMonth()) {
                        day.classList.add('curr-date')
                    }
                }
                calendar_days.appendChild(day)
            }
        }

        let month_list = calendar.querySelector('.month-list')

        month_names.forEach((e, index) => {
            let month = document.createElement('div')
            month.innerHTML = `<div data-month="${index}">${e}</div>`
            month.querySelector('div').onclick = () => {
                month_list.classList.remove('show')
                curr_month.value = index
                generateCalendar(index, curr_year.value)
            }
            month_list.appendChild(month)
        })

        let month_picker = calendar.querySelector('#month-picker')

        month_picker.onclick = () => {
            month_list.classList.add('show')
        }

        let currDate = new Date()

        let curr_month = {
            value: currDate.getMonth()
        }
        let curr_year = {
            value: currDate.getFullYear()
        }

        generateCalendar(curr_month.value, curr_year.value)

        document.querySelector('#prev-year').onclick = () => {
            --curr_year.value
            generateCalendar(curr_month.value, curr_year.value)
        }

        document.querySelector('#next-year').onclick = () => {
            ++curr_year.value
            generateCalendar(curr_month.value, curr_year.value)
        }

        let dark_mode_toggle = document.querySelector('.dark-mode-switch')

        dark_mode_toggle.onclick = () => {
            document.querySelector('body').classList.toggle('light')
            document.querySelector('body').classList.toggle('dark')
        }
    </script>
@endsection
