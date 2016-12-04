@extends('index')

@section('content')

<section id="first">
    <div class="contents first">
        <img id="volume" class="js-volume" src="{{ URL::asset('graph/volumeOff.png') }}" />
    </div>
</section>
<section>
    <div class="video-container">
        <div class="row">
            @foreach($videos as $video)
                <iframe class="col-lg-4 single-video js-video" src="{{ $video->url }}?showinfo=0&enablejsapi=1" frameborder="0" allowfullscreen volume="0"></iframe>
            @endforeach
        </div>
    </div>
</section>

<video id="bg" autoplay="autoplay" loop="loop" muted>
    <source src="{{ URL::asset('video/FunkinDance.webm') }}" type="video/webm" />
    <source src="{{ URL::asset('video/FunkinDance.mp4') }}" type="video/mp4" />
</video>
@endsection