tt_content.dp_kickstart_theme_carousel = COA
tt_content.dp_kickstart_theme_carousel {
    10 =< lib.stdheader
    20 = FLUIDTEMPLATE
    20 {
        file = {$plugin.dp_kickstart_theme_contentelements.view.templateRootPath}Bootstrap/Carousel.html
        partialRootPath = {$plugin.dp_kickstart_theme_contentelements.view.partialRootPath}
        layoutRootPath = {$plugin.dp_kickstart_theme_contentelements.view.layoutRootPath}
    }
}