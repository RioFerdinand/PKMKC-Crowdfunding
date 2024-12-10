function scrollSlider(direction){
    const slider = document.querySelector('.slider');
    const scrollAmount = slider.offsetWidth;

    if(direction  == 'next'){
        slider.scrollLeft += scrollAmount;
    }else if(direction == 'prev'){
        slider.scrollLeft -=  scrollAmount;
    }
}