@extends('admin.layouts.layout')

@section('title', '首页')

@section('css')
    <link href="{{loadEdition('/admin/css/index.css')}}" rel="stylesheet"/>
@endsection
@section('content')

    <div class="container">

        <div class="clock">
            <div id="date" class="date box"></div>
            <div class="clock-face">
                <div class="marker twelve"></div>
                <div class="marker three"></div>
                <div class="marker six"></div>
                <div class="marker nine"></div>
                <div id="minute-hand" class="hand minute-hand"></div>
                <div id="hour-hand" class="hand hour-hand"></div>
                <div id="second-hand" class="hand second-hand"></div>
                <div id="centre" class="centre"></div>
                <div id="digital-time" class="digital-time box"></div>
            </div>
        </div>

        <span class="switch-label">黑/白切换</span>
        <label class="switch">
            <input id="dark-mode-toggle" type="checkbox">
            <span class="slider round"></span>
        </label>

    </div>

    <script>
        // Arrays of strings for the date display
        const days = ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'];
        const months = [
            '1月', '2月', '3月', '4月',
            '5月', '6月', '7月', '8月',
            '9月', '10月', '11月', '12月'
        ];

        // Get the DOM elements
        const dateDisplay = document.getElementById('date');
        const hourHand = document.getElementById('hour-hand');
        const minuteHand = document.getElementById('minute-hand');
        const secondHand = document.getElementById('second-hand');
        const digitalTime = document.getElementById('digital-time');

        // Dark mode toggle
        document.getElementById('dark-mode-toggle').addEventListener('change', function(){
            document.body.classList.toggle("dark");
        });

        // Get and display the time
        const clock = function() {

            let timeNow = new Date();
            // DEBUG: new Date(year, month, day, hours, minutes, seconds)
            // timeNow = new Date(2019,7,21,18,22,41);
            // DEBUG end

            // Display the date
            let day = timeNow.getDay();
            let date = timeNow.getDate();
            let month = timeNow.getMonth();
            dateDisplay.innerHTML = `${months[month]} ${format(date)} 号 ${days[day]}`;

            // Each second is 6 degrees of arc.
            // Second hand moves in discrete steps
            let seconds = timeNow.getSeconds();
            let sRot = seconds * 6 - 90;

            // Each minute is 6 degrees of arc.
            // Add seconds/10 for smooth movement of minute hand
            let minutes = timeNow.getMinutes();
            let mRot = (minutes * 6) + (seconds / 10) - 90;

            // Each hour is 30 degrees of arc.
            // Add minutes/2 for smooth movement of hour hand
            let hours = timeNow.getHours();
            let hRot = (hours % 12 * 30) + (minutes / 2) - 90;

            // Position the hands
            hourHand.style.transform = `rotate(${hRot}deg)`;
            minuteHand.style.transform = `rotate(${mRot}deg)`;
            secondHand.style.transform = `rotate(${sRot}deg)`;

            // Display the digital clock
            digitalTime.innerHTML = `${format(hours)}:${format(minutes)}:${format(seconds)}`;

        }

        // Helper function to add leading zero
        function format(num) {
            return num < 10 ? `0${num}` : num;
        }

        // IIFE to run the clock
        (function run() {
            clock();
            setTimeout(function() { run(); }, 1000);
        })();
    </script>
@stop