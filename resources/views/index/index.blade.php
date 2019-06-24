@include('main')

@section('contents')
<div id="contents">
    <div class="clearfix">
        <a class="floatBox" href="#">
            <div class="img"><img src="{{ asset('img/assign.png') }}" alt="assing"></div>
            <div class="label">REQUEST ASSING</div>
        </a>
        <a class="floatBox" href="/pull-request">
            <div class="img"><img src="{{ asset('img/pullRequest.png') }}" alt="getpull"></div>
            <div class="label">PULL REQUEST</div>
        </a>
        <a class="floatBox" href="#">
            <div class="img"><img src="{{ asset('img/schedule.png') }}" alt="config"></div>
            <div class="label">CONFIG</div>
        </a>
    </div>
</div>
@show