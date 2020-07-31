function anchorLink(link) {
    $(`.${link}`).click(function(e) {
        e.preventDefault();
        var aid = $(this).attr("href");
        $('html,body').animate({scrollTop: $(aid).offset().top},'slow');
    });
}

anchorLink("nav-link");