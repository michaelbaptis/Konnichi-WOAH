@extends('Question.layouts.mainMulti')

@section('content')


@include('Question.layouts.progress')

<div class="maincont">
    <h3 class="question">遅く なりそなので、 行ってきます</h3>
    <h3 class="question1">Osoku narisonanode, ittekimasu</h3>
    <h3 class="question1">reply the dialog</h3>
    <div class="choices">
        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">まだです、これをしなければなりません</h4>
        </button>

        <button class="ans" onclick="showDiv('1')">
            <h4 class="answer">いってらっしゃい, 途中 で 気をつけて ください</h4>
        </button>

        <button class="ans" onclick="showDiv('2')">
            <h4 class="answer">お久しぶり です、 元気 でした</h4>
        </button>
    </div>

</div>

{{-- <div class="downer" id="5">
    <button class="skib" onclick="showDiv('2')">SKIP</button>
</div> --}}


@endsection
