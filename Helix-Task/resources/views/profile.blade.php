@extends('main')

@section('content')

    <div class="card">
        <div class="card-header">Dashboard</div>
        <div class="card-body">

            <p>You are logged in !</p>
            <br>
            <h1>Welcome {{\Auth::user()->username}} !</h1>
        </div>
    </div>

    {{--    @if (\Auth::user())--}}
    {{--        <script>--}}
    {{--            $(function() {--}}
    {{--                setInterval(function checkSession() {--}}
    {{--                    $.get('/profile', function(data) {--}}
    {{--                        if (data.user) {--}}
    {{--                            location.reload('/login');--}}
    {{--                        }--}}
    {{--                    });--}}
    {{--                }, 60000);--}}
    {{--            });--}}
    {{--        </script>--}}
    {{--    @endif--}}

    <script>
        setTimeout(function() { window.location={{ route('login') }}}, 60000);
    </script>

@endsection('content')
