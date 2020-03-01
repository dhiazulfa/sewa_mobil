<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 
 <script type="text/javascript">
            
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
          var originalAddEventListener = EventTarget.prototype.addEventListener,
                    oldWidth = window.innerWidth;

                EventTarget.prototype.addEventListener = function (eventName, eventHandler, useCapture) {
                    if (eventName === "resize") {
                        originalAddEventListener.call(this, eventName, function (event) {
                            if (oldWidth === window.innerWidth) {
                                return;
                            }
                            else if (oldWidth !== window.innerWidth) {
                                oldWidth = window.innerWidth;
                            }
                            if (eventHandler.handleEvent) {
                                eventHandler.handleEvent.call(this, event);
                            }
                            else {
                                eventHandler.call(this, event);
                            };
                        }, useCapture);
                    }
                    else {
                        originalAddEventListener.call(this, eventName, eventHandler, useCapture);
                    };
                };
            };
            
        </script>

<script type="text/javascript">

$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});

</script>

    <title>Jasa Sewa Mobil &copy;</title>
  </head>
  <body>

  <div class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3 mt-3">
        <div class="container">
        <a href="#" class="navbar-brand text-uppercase font-weight-bold">GZ Mobil</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">About</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Gallery</a></li>
                    <li class="nav-item"><a href="#portofolio" class="nav-link text-uppercase font-weight-bold">Portfolio</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="jumbotron">
  <p>Tertarik berwisata dengan kami? Klik tombol dibawah ini untuk menghubungi kami.</p>
  <p class="lead">
    <a class="btn btn-success btn-lg" href="https://api.whatsapp.com/send?phone=628587707061" target="_blank" role="button">Whatsapp</a>
  </p>
</div>

<!--  
<div id="carouseldhiaz" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouseldhiaz" data-slide-to="0" class="active"></li>
    <li data-target="#carouseldhiaz" data-slide-to="1"></li>
    <li data-target="#carouseldhiaz" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/images/bg-slider1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/bg-slider2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/bg-slider3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouseldhiaz" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouseldhiaz" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
-->

<div class="container"> 
<div class="card-deck">
  
<div class="card">
    <img src="assets/images/mobil/mobil1.jpg" class="card-img-top" width="140px" height="150px" alt="...">
    <div class="card-body">
      <h5 class="card-title">Toyota Grand New Avanza</h5>
      <p class="card-text">12 Jam + Driver + BBM + Air Mineral</p>
      <p class="card-text"><small class="text-muted">Rp. 550.000,-</small></p>

      <p class="card-text">Full Day + Driver + BBM + Air Mineral</p>
      <p class="card-text"><small class="text-muted">Rp. 650.000,-</small></p>
    </div>
  </div>

  <div class="card">
    <img src="assets/images/mobil/mobil2.jpg" class="card-img-top" width="100px" height="150px" alt="...">
    <div class="card-body">
      <h5 class="card-title">Toyota Grand Innova</h5>
      <p class="card-text">Full Day + Driver + BBM + Air Mineral</p>
      <p class="card-text"><small class="text-muted">Rp. 750.000,-</small></p>
    </div>
  </div>

  <div class="card">
    <img src="assets/images/mobil/mobil6.jpg" class="card-img-top" width="140px" height="150px" alt="...">
    <div class="card-body">
      <h5 class="card-title">Medium Bus 30 Seat</h5>
      <p class="card-text">Full Day + Driver + BBM + Air Mineral</p>
      <p class="card-text"><small class="text-muted">Rp. 2.500.000,-</small></p>
    </div>
  </div>

  <div class="card">
    <img src="assets/images/mobil/mobil3.jpg" class="card-img-top" width="140px" height="150px" alt="...">
    <div class="card-body">
      <h5 class="card-title">Toyota Innova Reborn</h5>
      <p class="card-text">Full Day + Driver + BBM + Air Mineral</p>
      <p class="card-text"><small class="text-muted">Rp. 850.000,-</small></p>
    </div>
  </div>

  <div class="card">
    <img src="assets/images/mobil/mobil4.jpg" class="card-img-top" width="140px" height="150px" alt="...">
    <div class="card-body">
      <h5 class="card-title">Toyota Hiace Commuter</h5>
      <p class="card-text">Full Day + Driver + BBM + Air Mineral</p>
      <p class="card-text"><small class="text-muted">Rp. 1.250.000,-</small></p>
    </div>
  </div>
  
</div>
</div>

<br> <br>

<div class="container"> 
<div class="card-deck mb-5">
  
<div class="card">
    <img src="assets/images/mobil/mobil5.jpg" class="card-img-top" width="140px" height="150px" alt="...">
    <div class="card-body">
      <h5 class="card-title">Isuzu Elf Executive 12 Seat</h5>
      <p class="card-text">Full Day + Driver + BBM + Air Mineral</p>
      <p class="card-text"><small class="text-muted">Rp. 900.000,-</small></p>
    </div>
  </div>

  <div class="card">
    <img src="assets/images/mobil/mobil5.jpg" class="card-img-top" width="140px" height="150px" alt="...">
    <div class="card-body">
      <h5 class="card-title">Isuzu Elf Executive 12 Seat</h5>
      <p class="card-text">Full Day + Driver + BBM + Air Mineral</p>
      <p class="card-text"><small class="text-muted">Rp. 1.200.000,-</small></p>
    </div>
  </div>

  <div class="card">
    <img src="assets/images/mobil/mobil6.jpg" class="card-img-top" width="140px" height="150px" alt="...">
    <div class="card-body">
      <h5 class="card-title">Medium Bus 30 Seat</h5>
      <p class="card-text">Full Day + Driver + BBM + Air Mineral</p>
      <p class="card-text"><small class="text-muted">Rp. 2.500.000,-</small></p>
    </div>
  </div>

  <div class="card">
    <img src="assets/images/mobil/mobil6.jpg" class="card-img-top" width="140px" height="150px" alt="...">
    <div class="card-body">
      <h5 class="card-title">Medium Bus 30 Seat</h5>
      <p class="card-text">Full Day + Driver + BBM + Air Mineral</p>
      <p class="card-text"><small class="text-muted">Rp. 2.500.000,-</small></p>
    </div>
  </div>

  <div class="card">
    <img src="assets/images/mobil/mobil7.jpg" class="card-img-top" width="140px" height="150px" alt="...">
    <div class="card-body">
      <h5 class="card-title">Big Bus 50 Seat</h5>
      <p class="card-text">Full Day + Driver + BBM + Air Mineral</p>
      <p class="card-text"><small class="text-muted">Rp. 3.500.000,-</small></p>
    </div>
  </div>
  
</div>
</div>

<div class="container"> 
<section id="portofolio" class="mb-5">
<br>
<div class="blog-card">
    <div class="meta">
      <div class="photo" style="background-image: url(assets/images/bg-slider1.jpg)"></div>
      <ul class="details">
        <li class="author"><a href="#">Air Terjun Kalibiru</a></li>
        <li class="date">December. 29, 2019</li>
        <li class="tags">
          <ul>
            <li><a href="#">Info</a></li>
            <li><a href="#">Direction</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="description">
      <h1>Informasi Wisata</h1>
      <h2>Air Terjun Kali Biru</h2>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
      <p class="read-more">
        <a target="_blank" href="artikel.html">Read More</a>
      </p>
    </div>
  </div>
  <div class="blog-card alt">
    <div class="meta">
      <div class="photo" style="background-image: url(assets/images/bg-slider2.jpg)"></div>
      <ul class="details">
        <li class="author"><a href="#">Candi Ratu Boko</a></li>
        <li class="date">November. 16, 2019</li>
        <li class="tags">
          <ul>
            <li><a href="#">Info</a></li>
            <li><a href="#">Direction</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="description">
      <h1>Informasi Wisata</h1>
      <h2>Candi Ratu Boko</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos temporibus.</p>
      <p class="read-more">
        <a target="_blank" href="artikel.html">Read More</a>
      </p>
    </div>
  </div>

  </div>
</section>
<br><br><br>

  <section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center mt-5">
        <h1>Mari berkarya bersama!</h1>
        <hr class="my-4">
        <p>Tertarik membuat foto bersama saya? Atur jadwal lalu gas!
        Silahkan hubungi saya dengan cara dibawah dan akan saya balas secepatnya!</p>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 ml-auto text-center mb-5">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=6285877070619">+62858-7707-0619</p>
      </div>
      <div class="col-lg-4 mr-auto text-center">
        <p>
          <a href="mailto: dhiazulfamb@gmail.com">dhiazulfamb@gmail.com</a>
        </p>
      </div>
      <div class="col-lg-4 mr-auto text-center">
            <p>
              <a target="_blank" href="https://www.instagram.com/dhiazulfa_">My Instagram</a>
            </p>
      </div>

    </div>
  </div>
</section>

<footer class="py-3 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Dhiazulfa Maulana Bachtiar 2020</p>
  </div>
  </footer>

</div>

</body>
</html>