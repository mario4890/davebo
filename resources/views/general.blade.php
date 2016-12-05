@extends('index')

@section('content')
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Menu</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active"><a class="menu" data-section="first" href="#first">Home<span class="sr-only">(current)</span></a></li>
            <li class=""><a class="menu" data-section="about" href="#about">O DaveBo</a></li>
            <li class=""><a class="menu" data-section="project" href="#project">Portfolio</a></li>
            <li class=""><a class="menu" data-section="contact" href="#contact">Kontakt</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><img id="volume" class="js-volume" src="{{ URL::asset('graph/volumeOff.png') }}" /></a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
    
  </div><!-- /.container-fluid -->
</nav>
<!-------------------------------------------------------------------------------->
<div class="main">
    <section id="first">
    </section>

    <section id="about">
        <div class="second">
            <h2><u>O DaveBo</u></h2>
            <h3>Najlepszy saksofonista klubowy oraz producent muzyczny w jednym</h3>
            <p>Współpracuje z najlepszymi muzykami oraz Dj'ami na świecie</p>
        </div>
    </section>

    <section id="project">
        <div class="video-container">
            <h2><u>Portfolio</u></h2>
            <div class="row">
                <center>
                    @foreach($videos as $video)
                    <iframe class="col-lg-4 single-video js-video" src="{{ $video->url }}?showinfo=0&enablejsapi=1" frameborder="0" allowfullscreen volume="0"></iframe>
                    @endforeach
                </center>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="third">
            <h2><u>Kontakt</u></h2>
            <p>Telefon:</p>
            <h3>+48 505 892 772</h3>
            <BR>
            <p>E-mail:</p>
            <h3>info@davebosax.com</h3>
        </div>
    </section>
    <section>
        <p id="created" class="contents"><a href="http://www.mariuszb.eu">Created by Mariusz Bocz</a></p>
    </section>
</div>

<video id="bg" autoplay="autoplay" loop="loop" muted>
    <source src="{{ URL::asset('video/FunkinDance.webm') }}" type="video/youtube" />
    <source src="{{ URL::asset('video/FunkinDance.mp4') }}" type="video/mp4" />
</video>
@endsection