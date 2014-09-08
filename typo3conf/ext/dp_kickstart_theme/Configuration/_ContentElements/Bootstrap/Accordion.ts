tt_content.dp_kickstart_theme_accordion = COA
tt_content.dp_kickstart_theme_accordion  {
    10 =< lib.stdheader
    20 = FLUIDTEMPLATE
    20 {
        file = {$plugin.dp_kickstart_theme_contentelements.view.templateRootPath}Bootstrap/Accordion.html
        partialRootPath = {$plugin.dp_kickstart_theme_contentelements.view.partialRootPath}
        layoutRootPath = {$plugin.dp_kickstart_theme_contentelements.view.layoutRootPath}
    }
}