@extends('index')

@section('content')

<div id="wrapper">
    <img src="img/tekst.png" alt="" />
    <nav class="icons">
        <div class="right">
            <a href="#" id="video_button_mute"><span class="icon sound">Wycisz</span></a>
        </div>

        <a href="#" id="video_button_quality"><span class="icon sd">SD</span></a>
    </nav>
</div>
<div class="after">
    <div class="contents">ALE ON GRA :P</div>
</div>

<div class="after middle">
    <div class="contents">Zjedź w dół</div>
</div>
<div class="after secound">
    <div class="contents">ALE ON GRA :P</div>
</div>
</div>
<video id="bg" autoplay="autoplay" loop="loop">
    <source src="{{ URL::asset('video/FunkinDance.webm') }}" type="video/webm" />
    <source src="{{ URL::asset('video/FunkinDance.mp4') }}" type="video/mp4" />
</video>

@endsection