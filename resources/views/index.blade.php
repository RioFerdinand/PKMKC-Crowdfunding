<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
    <title>Crowdfund</title>
</head>
<body>
<div class="navigation">
    <a href="#" class="logo">Logo</a>
    <div class="navbar">
        <a href="#" class="navi1">Cara Kerja</a>
        <a href="#" class="navi1">Galang Dana</a>
        <a href="#" class="navi1">Donasi</a>
        <a href="#" class="navi1">Tentang Kami</a>
        <div class="notif content-bell">
            <img src="/assets/img/bell.svg" alt="notifications">
        </div>
        <div class="login">
            <a href="#" style="text-decoration: none;">Login</a>
        </div>
        <div class="register">
            <a href="#">Register</a>
        </div>
    </div>
</div>
<div id="includenav"></div>

<div class="slider-wrapper">
    <div class="slider">
        <img src="/assets/img/street.jpeg" id="slide-1">
        <img src="/assets/img/sunset.jpeg" id="slide-2">
        <img src="/assets/img/rainbow.jpeg" id="slide-3">
    </div>
    <button class="slider-nav prev" onclick="scrollSlider('prev')"></button>
    <button class="slider-nav next" onclick="scrollSlider('next')"></button>
        <div class="slider2-nav">
        <a href="#slide-1"></a>
        <a href="#slide-2"></a>
        <a href="#slide-3"></a>
    </div>
</div>

<div class="category">
    <a href="#">Donasi pasien</a>
    <a href="#">Campaign</a>
    <a href="#">Zakat</a>
    <a href="#">Donasi Rutin</a>
    <a href="#">Donasi Rutin</a>
    <a href="#">Donasi Rutin</a>
    <a href="#">Donasi Rutin</a>
</div>

<div class="campaign">
    <div class="wrapper-head">
    <a href="#" class="title" style="color: black;">Campaign mendesak</a>
    <a href="#" class="more">See more</a>
    </div>
    <div class="wrapper-body">
        <div class="preview1">
            <img src="/assets/img/tree.jpeg" alt="dummy">
            <div class="desc">
                <a href="#">sebuah pohon terlihat indah diterangi oleh matahari terbenam</a>
                <a href="#">Jackfy</a>
            </div>
        </div>
        <div class="preview1">
            <img src="/assets/img/tree.jpeg" alt="dummy">
            <div class="desc">
                <a href="#">sebuah pohon terlihat indah diterangi oleh matahari terbenam</a>
                <a href="#">Jackfy</a>
            </div>
        </div>
        <div class="preview1">
            <img src="/assets/img/tree.jpeg" alt="dummy">
            <div class="desc">
                <a href="#">sebuah pohon terlihat indah diterangi oleh matahari terbenam</a>
                <a href="#">Jackfy</a>
            </div>
        </div>
        <div class="preview1">
            <img src="/assets/img/tree.jpeg" alt="dummy">
            <div class="desc">
                <a href="#">sebuah pohon terlihat indah diterangi oleh matahari terbenam</a>
                <a href="#">Jackfy</a>
            </div>
        </div>
    </div>
</div>

<div class="campaign-2">
    <div class="wrapper-head">
    <a href="#" class="title" style="color: black;">Campaign terbaru</a>
    <a href="#" class="more">See more</a>
    </div>
    <div class="wrapper-body">
        <div class="preview1">
            <img src="/assets/img/seaside.jpeg" alt="dummy">
            <div class="desc">
                <a href="#">keindahan alam didunia pesisir pulau</a>
                <a href="#">Jackfy</a>
            </div>
        </div>
        <div class="preview1">
            <img src="/assets/img/seaside.jpeg" alt="dummy">
            <div class="desc">
                <a href="#">keindahan alam didunia pesisir pulau</a>
                <a href="#">Jackfy</a>
            </div>
        </div>
        <div class="preview1">
            <img src="/assets/img/seaside.jpeg" alt="dummy">
            <div class="desc">
                <a href="#">keindahan alam didunia pesisir pulau</a>
                <a href="#">Jackfy</a>
            </div>
        </div>
        <div class="preview1">
            <img src="/assets/img/seaside.jpeg" alt="dummy">
            <div class="desc">
                <a href="#">keindahan alam didunia pesisir pulau</a>
                <a href="#">Jackfy</a>
            </div>
        </div>
    </div>
</div>

<div class="slider-2">
    <a href="#" style="color: black; font-weight: bold;">News about Campaign</a>
    <div class="newslider">
        <img src="/assets/img/dock.jpeg" id="item-1">
        <img src="/assets/img/dock.jpeg" id="item-2">
        <img src="/assets/img/dock.jpeg" id="item-3">
    </div>
    <div class="slider2-nav">
        <a href="#item-1"></a>
        <a href="#item-2"></a>
        <a href="#item-3"></a>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 <script>
    function scrollSlider(direction){
    const slider = document.querySelector('.slider');
    const scrollAmount = slider.offsetWidth;

    if(direction  == 'next'){
        slider.scrollLeft += scrollAmount;
    }else if(direction == 'prev'){
        slider.scrollLeft -=  scrollAmount;
    }
}
 </script>
</html>