tt_content.dp_kickstart_theme_listgroup = COA
tt_content.dp_kickstart_theme_listgroup {
    10 =< lib.stdheader
    20 = FLUIDTEMPLATE
    20 {
        file = {$plugin.dp_kickstart_theme_contentelements.view.templateRootPath}Bootstrap/ListGroup.html
        partialRootPath = {$plugin.dp_kickstart_theme_contentelements.view.partialRootPath}
        layoutRootPath = {$plugin.dp_kickstart_theme_contentelements.view.layoutRootPath}
    }
}