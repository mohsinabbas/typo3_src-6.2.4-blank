###########################################
#### CTYPE: BOOTSTRAP PACKAGE TEXTICON ####
###########################################
tt_content.dp_kickstart_theme_texticon = COA
tt_content.dp_kickstart_theme_texticon {
	5 = LOAD_REGISTER
	5 {
		iconClass {
			cObject = COA
			cObject {
                10 = CASE
                10 {
                    key.field = icon_size
                    default = TEXT
                    default {
                        value = default
                        noTrimWrap = | texticon-size-||
                    }
                    1 < .default
                    1.value = medium
                    2 < .default
                    2.value = large
                    3 < .default
                    3.value = awesome
                }
                20 = CASE
                20 {
                    key.field = icon_type
                    default = TEXT
                    default {
                        value = default
                        noTrimWrap = | texticon-type-||
                    }
                    1 < .default
                    1.value = square
                    2 < .default
                    2.value = circle
                }
			}
		}
        iconStyle {
            cObject = COA
			cObject {
				10 = TEXT
				10 {
					field = icon_color
					required = 1
					noTrimWrap = |color: |;|
				}
				20 = TEXT
				20 {
					field = icon_background
					required = 1
					noTrimWrap = |background-color: |;|
				}
				stdWrap {
					trim = 1
					noTrimWrap = | style="|"|
					required = 1
				}
                if {
                    value = 0
                    equals.field = icon_type
                    negate = 1
                }
			}
        }
	}
    10 = TEXT
    10 {
        field = icon
        required = 1
        innerWrap = <span class="glyphicon glyphicon-|"{register:iconStyle}></span>
        innerWrap.insertData = 1
        dataWrap = <div class="texticon-icon{register:iconClass}">|</div>
        if {
            value = 0
            equals.field = icon
            negate = 1
        }
    }
    20 = COA
    20 {
        10 = < lib.stdheader
        20 = TEXT
        20 {
            field = bodytext
            required = 1
            parseFunc = < lib.parseFunc_RTE
            editIcons = tt_content:bodytext, rte_enabled
            editIcons.beforeLastTag = 1
            editIcons.iconTitle.data = LLL:EXT:css_styled_content/pi1/locallang.xml:eIcon.bodytext
            prefixComment = 2 | Text Icon:
        }
        wrap = <div class="texticon-content">|</div>
    }
    wrap = <div class="texticon texticon-{field:icon_position}">|</div>
    wrap.insertData = 1
}