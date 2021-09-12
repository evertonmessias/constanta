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


});

function filter(x) {
    $(".timeline .portfoliofilter").hide();
    $(".timeline .filter" + x).show();
}