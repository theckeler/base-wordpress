jQuery(document).ready(function ($) {
    if (!('IntersectionObserver' in window)) {
        console.log('No IntersectionObserver Suport');
        $(".animate-this").addClass("animate-run");
    } else {
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.intersectionRatio > 0) {
                    entry.target.classList.add("animate-run");
                    observer.unobserve(entry.target);
                }
            });
        });
        $('.animate-this').each(function () {
            observer.observe(this);
        });
    }

    $(window).load(function () {
        $('body').addClass('page-loaded');
    });

    var scrollPos = 0;
    $(window).scroll(function (e) {
        if ($(window).scrollTop() > scrollPos && $(window).scrollTop() > 200) {
            $('body').addClass('scrolling');
        } else {
            $('body').removeClass('scrolling');
        }
        scrollPos = $(window).scrollTop();
    });

    $('.load-more').on("click", function (e) {
        e.preventDefault();
        $(this).hide().closest('.list').next('.list').addClass('active');
    });

    var paged = 2;
    $("#load-more").click(function () {
        loadMoreButton = $(this);
        loadMoreButton.addClass('active');
        $.post(ajaxurl,
            {
                'action': 'load_more_posts',
                'paged': paged
            },
            function (response) {
                var posts = JSON.parse(response);
                for (var i = 0; i < posts.length; i++) {
                    if (posts[i] == "0") {
                        $("#load-more").hide();
                    } else {
                        $(posts[i]).appendTo('.posts');
                        $('html, body').animate({
                            scrollTop: $("#page-" + paged + "").offset().top
                        }, 100);
                    }
                }
                paged++;
                loadMoreButton.removeClass('active');
            });
    });
});