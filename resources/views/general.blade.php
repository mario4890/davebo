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

<div class="video-container">
    <div class="row">
        <iframe class="col-lg-4 single-video" src="https://www.youtube.com/embed/uw9D-38xSHA" frameborder="0" allowfullscreen></iframe>
        <iframe class="col-lg-4 single-video" src="https://www.youtube.com/embed/VWkP5EdjBsQ" frameborder="0" allowfullscreen></iframe>
        <iframe class="col-lg-4 single-video" src="https://www.youtube.com/embed/RgbSWxZvrXA" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="row">
        <iframe class="col-lg-4 single-video" src="https://www.youtube.com/embed/AWS8tPRvMjs" frameborder="0" allowfullscreen></iframe>
        <iframe class="col-lg-4 single-video" src="https://www.youtube.com/embed/99DRO_HuaDM" frameborder="0" allowfullscreen></iframe>
        <iframe class="col-lg-4 single-video" src="https://www.youtube.com/embed/Fj_Ohba0VFM" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="row">
        <iframe class="col-lg-4 single-video" src="https://www.youtube.com/embed/8qNHH69BktE" frameborder="0" allowfullscreen></iframe>
        <iframe class="col-lg-4 single-video" src="https://www.youtube.com/embed/OQJs_qRE4mA" frameborder="0" allowfullscreen></iframe>
        <iframe class="col-lg-4 single-video" src="https://www.youtube.com/embed/uIHxCvooD48" frameborder="0" allowfullscreen></iframe>
    </div>
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