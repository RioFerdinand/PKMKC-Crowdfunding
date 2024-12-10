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

<div class="slider-wrapper">
    <div class="slider">
        <img src="/assets/img/longsor.jpeg">
        <img src="/assets/img/banjir.jpeg">
        <img src="/assets/img/meletup.jpeg">
    </div>
    <button class="slider-nav prev" onclick="scrollSlider('prev')"></button>
    <button class="slider-nav next" onclick="scrollSlider('next')"></button>
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

</body>
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