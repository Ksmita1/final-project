$(document).ready(function(){
    // Slideris
    var slider = tns({
        container: '.foto-slider',
        items: 3,
        slideBy: 1,
        rewind: true,
        swipeAngel: false,
        autoplay: true,
        autoplayButtonOutput: false,
        navAsThumbnails: true,
        nav: false,
        autoplayTimeout: 3500,
        controlsText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        speed: 400,
    });

    // Nuotraukų padidinimas jas paspaudus
    var modal = document.getElementById('myModal');
    // susiejame, jog ši funkcija veiktų paspaudus ant visų nuotraukų
    var images = document.getElementsByClassName('myImages');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");

    for (var i = 0; i < images.length; i++) {
        var img = images[i];
    // foto pasikeitimas paspaudus mygtuką ant jos
    img.onclick = function(evt) {
        console.log(evt);
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
        }
    }

    var span = document.getElementsByClassName("close")[0];

    span.onclick = function() {
        modal.style.display = "none";
    }
});
