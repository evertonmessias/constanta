$(document).ready(function () {

    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2500
    });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 2500 && $(this).scrollTop() < 2600) {

            function Circlle(el) {
                $(el).circleProgress({ fill: { color: '#eee' } })
                    .on('circle-animation-progress', function (event, progress, stepValue) {
                        //$(this).find('strong').text(String(stepValue.toFixed(2)).substr(2));                        
                    });
            };            
            Circlle('.round');            
        }
    });
            $(".slide1").show();		

			var pag = 1;

			$(".next").click(function () {
				if (pag > 1) {
					pag--;
					console.log(pag);
					$(".slide").slideUp(400);
					$(".slide" + pag).slideDown(400)
				}
			});

			$(".prev").click(function () {
				if (pag < 5) {
					pag++;
					console.log(pag);
					$(".slide").slideUp(400);
					$(".slide" + pag).slideDown(400)
				}
			});






});

function filter(x) {
    $(".timeline .portfoliofilter").hide();
    $(".timeline .filter" + x).show();
}

function slide_prev(){
    $("#resp .slide1").animate({width:'toggle'},350);
}

function slide_next(){
    $("#resp .slide2").animate({width:'toggle'},350);
}