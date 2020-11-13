$(function() {
    $('.big-slider').slick({
        dots: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"</button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"</button>'
    });

    var $preloader = $('#page-preloader'),
        $spinner = $preloader.find('.spinner');
    $spinner.fadeOut();
    $preloader.delay(350).fadeOut('slow');


    $("a.go").click(function(e) {
        e.preventDefault();
        elementClick = $(this).attr("href");
        destination = $(elementClick).offset().top;
        $("body,html").animate({ scrollTop: destination }, 800);
    });

    $('.icon-menu').click(function(event) {
        $('.icon-menu,.menu-body').toggleClass('active');
        $('body').toggleClass('lock');
        $('.shadow').toggleClass('active');
        $('.list-link').toggleClass('active');
    });
    $('.shadow').click(function(event) {
        $('.icon-menu,.menu-body').removeClass('active');
        $('body').removeClass('lock');
        $('.shadow').removeClass('active');
        $('.list-link').removeClass('active');
    });



    const tabsBtn = document.querySelectorAll('.tabs__nav-btn');
    const tabsItems = document.querySelectorAll('.tabs__item');

    tabsBtn.forEach(function(item) {
        item.addEventListener('click', function() {
            let currentBtn = item;
            let tabId = currentBtn.getAttribute('data-tab');
            let currentTab = document.querySelector(tabId);

            if (!currentBtn.classList.contains('active')) {
                tabsBtn.forEach(function(item) {
                    item.classList.remove('active');
                });

                tabsItems.forEach(function(item) {
                    item.classList.remove('active');
                });


                currentBtn.classList.add('active');
                currentTab.classList.add('active');
            }
        });
    });

    document.querySelector('.tabs__nav-btn:first-child').click();
});