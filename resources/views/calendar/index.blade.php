@extends('layouts.app')@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/calendar.css') }}">
<script src="{{ asset('/fullcalendar-6.1.4/dist/index.global.min.js') }}"></script>
<div id="main-area">
    <div class="calendar-title">予約カレンダー</div>
    <div id="app">
        <form method="GET" class="form-horizontal" action="{{ route('reserve.confirm') }}">
            @csrf
            <div class="m-auto w-50 m-5 p-5">
                <div id='calendar'></div>
            </div>
        </form>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            eventSources: [ // ←★追記
                {
                    url: '/getReserveSlots',
                },
            ],
            eventSourceFailure() { // ←★追記
                console.error('エラーが発生しました。');
            },
            eventMouseEnter(info) { // ←★追記
                $(info.el).popover({
                    title: info.event.title,
                    content: info.event.extendedProps.description,
                    trigger: 'hover',
                    placement: 'top',
                    container: 'body',
                    html: true
                });
            }
        });
        calendar.render();
    });
</script>@endsection