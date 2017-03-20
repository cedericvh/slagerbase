
var $slider = $('.bxslider');
var $pages = [$('#home'), $('#ambacht'), $('#contact'), $('#folders'), $('#specialiteiten'), $('#bestelonline'), $('#nieuwsbrief'), $('#bedanktnieuwsbrief'), $('#uitschrijven')];
var $slides = [$('.slider-home'), $('.slider-ambacht'), $('.slider-contact'), $('.slider-folder'), $('.slider-specialiteiten'), $('.slider-bestelonline'), $('.slider-nieuwsbrief'), $('.slider-bedanktnieuwsbrief'), $('.slider-uitschrijven')];


function showSlides($pages, $slides){

    for (var x = 0; x < $slides.length; x += 1){
        $slides[x].detach();
    }

    for (var i = 0; i < $pages.length; i += 1) {
        if ($pages[i].length){
            $slides[i].appendTo($slider);
            return;
        }
    }
}

showSlides($pages, $slides);