@extends('index')

@section('content')
<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="glyphicon glyphicon-list navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand js-navbarBrand" href="#">
                <img class="logo"  src="./graph/davebo.svg" />
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav">
                <li class="link"><a class="menu" data-section="first" href="#first" >Home<span class="sr-only">(current)</span></a></li>
                <li class="link"><a class="menu" data-section="about" href="#about" >Dave Bo</a></li>
                <li class="link"><a class="menu" data-section="project" href="#project" >Movies</a></li>
                <li class="link"><a class="menu" data-section="project" href="#hits" >Saxophone Hits</a></li>
                <li class="link"><a class="menu" data-section="camera_wrap" href="#camera_wrap" >Photos</a></li>
                <li class="link"><a class="menu" data-section="contact" href="#contact" >Contact</a></li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <li><a href="https://www.facebook.com/DaveBoSaxophonist/" target="_blank"><i class="fa fa-facebook-square fa-2x nav-right"></i></a></li>
                <li><a href="https://www.youtube.com/user/DaveBoSax" target="_blank"><i class="fa fa-youtube-square fa-2x nav-right" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/davebosax/" target="_blank"><i class="fa fa-instagram fa-2x nav-right" aria-hidden="true"></i></a></li>
                <li><a href="https://soundcloud.com/dave-bo" target="_blank"><i class="fa fa-soundcloud fa-2x nav-right" aria-hidden="true"></i></a></li></li>
            </ul>
        </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
</nav>

<!-------------------------------------------------------------------------------->
<div class="main">
    <section id="first">
        <div class="first">
            <img class="volume js-volume" src="{{ URL::asset('graph/speakerOn.svg') }}" />
            <br />
            <img data-section="about" href="#about" class="arrowbottom js-arrow" src="{{ URL::asset('graph/circular-down-arrow-button.svg') }}" />
        </div>
    </section>

    <section id="about">
        <div class="second">
            <h2>DAVE BO</h2>
            <br/><br/>
            <h3>World class Saxophonist and Music Producer</h3>
            <br />
            <p>
                Co-working with leading DJs in the country and abroad like:<BR />
                Milk & Sugar, Plastik Funk, Sean Finn, Steve Murano, Toka or Wet Fingers.<BR />
                His productions appear on the European radio stations, such as Sunshine Live (Germany), bigFM (Germany), Helax (Czech Republic), Eska or RMF FM (Poland).<BR />
                Today, together with sensational DJ & Producer PESHO creates a Polish producer duo,<br /> who releases his songs in the world's biggest record labels like<BR />
                KONTOR RECORDS.<BR />
                "Pesho & Dave Bo" also producing tracks for stars as: Pitbull, Akon, Shaggy, Jason Derulo, etc.
            </p>
            <br/><br/>
            <h3>Dave Bo played on such events as:</h3>
            <br />
            <p>
                Winter Music Conference (Miami)<br />
                Mixology Night (Dubai)<br />
                Opening MAYA (India)<br />
                Airbeat One Festival (Germany)<br />
                Ewa Minge Fashion Show (France)<br />
                EXPO Milano (Italy)<br />
                Veto Social Club (Ibiza) and many clubs around the world<br />
            </p>
            <br/><br/>
            <h3>He has a solo album SAX4SEX (Released in USA / patronage of JAZZ FORUM) and recordings in many productions.</h3>
            <br />
            <a target="_blank" href="https://geo.itunes.apple.com/us/album/sax-4-sex-jazz-funk-lounge/id751718022?mt=1&app=music" style="display:inline-block;overflow:hidden;background:url(//linkmaker.itunes.apple.com/assets/shared/badges/en-us/music-lrg.svg) no-repeat;width:165px;height:55px;background-size:contain;"></a>
            <a target="_blank" href="https://play.spotify.com/album/6KH5lE355ke2Bdz9ancYBi?play=true&utm_source=open.spotify.com&utm_medium=open"><img class="spotify" src="{{ URL::asset('graph/listenOnSpotify.svg') }}" /></a>
            <br />
            <p class="text">
                In addition to concerts in Poland he has already performed in: USA (including Carnegie Hall, Winter Music Conference), Dubai, India, Germany, Spain, Italy, Austria, Czech Republic, France, Switzerland, Denmark, Ukraine and Russia.
            </p>
        </div>
    </section>
    
    <section id="project">
        <div class="video-container">
            <div class="row rowPhoto">
                <center>
                    @foreach($videos as $video)
                    <div class="js-photo photo col-lg-4" data-toggle="modal" data-target="#myModal" data-title="{{ $video->name }}" data-id="{{ $video->id }}" >
                        <img class="img-responsive single-video js-image" src="{{ $video->image }}" />
                        <p class="img-text">
                            {{ $video->name }}
                        </p>
                    </div>
                    @endforeach
                </center>
            </div>
        </div>
    </section>

    <div class="backModal js-backModal">
        <div class="myModal js-myModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close js-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"></h4>
                    </div>
                    <div class="modal-body">
                        <iframe class="iframe" src="" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default js-close" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="hits">
        <div class="second">
            <h2>The Greatest Saxophone Hits</h2>
            <br/><br/>
            <p>
                This time, Dave returning to the classics wants to win the hearts of the audience by performing 
                the best known songs composed or arranged for the sexiest instrument in the world. His idea was to collect
                the most popular saxophone songs and play all of them at front of audience in one concert.
                For this project he invite for cooperation the best polish musicians, who every day are playing with famous stars.  
            </p>
            <h3>Author's idea of music, under the title “The Greatest Saxophone Hits" is a project in which you will be able to hear such hits as: </h3>
            <br />
            <p>
                C. Dulfer "Lilly was here,"<br />
                G. Michael "Careless Whisper"<br />
                G. Rafferty “Baker Street”<br />
                ALF Theme<br />
                The Bold and the Beautiful<br />
            </p>
            <h3>and many more tunes that all over the years we’ve loved.</h3>
            <br />
            <center>
                <div class="js-photoHit photoHit" data-toggle="modal" data-target="#myModal" data-title="Dave Bo Project - The Greatest Saxophone Hits">
                    <img class="img-responsive single-video js-image" src="https://i.ytimg.com/vi/Q-QHo3FLp08/maxresdefault.jpg" />
                    <p class="img-text project-text">
                        Dave Bo Project - The Greatest Saxophone Hits
                    </p>
                </div>
            </center>
            <br/>
            <center>
                <div class="js-photoProject photoHit" data-toggle="modal" data-target="#myModal" data-title="Dave Bo Project - Stand By Me">
                    <img class="img-responsive single-video js-image" src="https://i.ytimg.com/vi/OQJs_qRE4mA/maxresdefault.jpg" />
                    <p class="img-text project-text">
                        Dave Bo Project - Stand By Me
                    </p>
                </div>
            </center>
        </div>
    </section>
    
    <section class="photos">
    <div class="camera_wrap camera_magenta_skin" id="camera_wrap">
        @foreach ($fileArray as $photo)
            <div data-src="{{ URL::asset("graph/footo/$photo") }}"></div>
        @endforeach
    </div><!-- #camera_wrap_2 -->
    </section>

    <section id="contact">
        <div class="fourth">
            <h2>Contact</h2>            
            <br /><br />
            <p>MANAGEMENT POLAND:</p>
            <a href="tel:0048-606-335-111"><h3>+48 606335111</h3></a>
            <a href="tel:0048-505-892-772"><h3>+48 505892772</h3></a>
            <a href="mailto:booking@davebosax.com"><h3>booking@davebosax.com</h3></a>
            <br /><br />
            <p>MANAGEMENT GERMANY:</p>
            <a href="tel:0049-0-1723-98201"><h3>+49 (0) 1723 98201</h3></a>
            <a href="mailto:booking@davebosax.com"><h3>booking@davebosax.com</h3></a>
            <a href="mailto:contact@tokabeatz.de"><h3>contact@tokabeatz.de</h3></a>
            <br /><br />
            <p>MANAGEMENT MIDDLE EAST</p>
            <a href="tel:00971-561-784-233"><h3>+971 561784233</h3></a>
            <a href="mailto:booking@davebosax.com"><h3>booking@davebosax.com</h3></a>
            <a href="mailto:timohiggs@gmail.com"><h3>timohiggs@gmail.com</h3></a>
            <center>
                ----------------------------
                <form action="" method="GET" id="mail">
                    {{ csrf_field() }}
                    <div style="padding-top: 20px;">
                        <input type="text" name="name" placeholder="NAME" required class="form"> 
                    </div>
                    <div style="padding-top: 20px;">
                        <input type="email" name="mail" placeholder="E-MAIL" required class="form"> 
                    </div>
                    <div style="padding-top: 20px;">
                        <textarea rows="8" name="wiad" class="form" placeholder="MESSAGE"></textarea>
                    </div>
                    <div style="padding-top: 20px;">
                        <input type="submit" value="Send" name="send">
                    </div>
                </form>
            </center>
        </div>
    </section>
    <section>
    </section>
</div>
<div class="social">
    <a href="https://www.facebook.com/DaveBoSaxophonist/" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a>
    <a href="https://www.youtube.com/user/DaveBoSax" target="_blank"><i class="fa fa-youtube-square fa-3x" aria-hidden="true"></i></a>
    <a target="_blank" class="iTunesBottom" href="https://geo.itunes.apple.com/us/album/sax-4-sex-jazz-funk-lounge/id751718022?mt=1&app=music"></a>
    <a target="_blank" href="https://play.spotify.com/album/6KH5lE355ke2Bdz9ancYBi?play=true&utm_source=open.spotify.com&utm_medium=open"><img class="spotifyBottom" src="{{ URL::asset('graph/listenOnSpotify.svg') }}" /></a>
    <a href="https://www.instagram.com/davebosax/" target="_blank"><i class="fa fa-instagram fa-3x instagramBottom" aria-hidden="true"></i></a>
    <a href="https://soundcloud.com/dave-bo" target="_blank"><i class="fa fa-soundcloud fa-3x" aria-hidden="true"></i></a>
</div>
<video id="bg" autoplay="autoplay" loop="loop">
    <source src="{{ URL::asset('video/Sigala.ogv') }}" type="video/youtube" />
    <source src="{{ URL::asset('video/Sigala1.mp4') }}" type="video/mp4" />
</video>
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection