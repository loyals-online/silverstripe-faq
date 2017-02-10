$(document).ready(function(){
    $('.faq').on('click', '.faq-item h3', function (ev) {
        $(this).nextAll('.more').slideToggle();
        $(this).find('span').toggleClass('on');

        ev.preventDefault();
        ev.stopPropagation();
        return false;
    });
});
