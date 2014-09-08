page = PAGE
page {
	typeNum = 0
	shortcutIcon = EXT:dp_kickstart_theme/Resources/Public/Icons/favicon.ico

	10 = FLUIDTEMPLATE
	10 {
		file.stdWrap.cObject = CASE
		file.stdWrap.cObject {
			key.data = levelfield:-1, backend_layout_next_level, slide
			key.override.field = backend_layout

			default = TEXT
			default.value = EXT:dp_kickstart_theme/Resources/Private/Templates/Page/Default.html

		}

		partialRootPath = EXT:dp_kickstart_theme/Resources/Private/Partials/Page/
		layoutRootPath = EXT:dp_kickstart_theme/Resources/Private/Layouts/Page/

		variables {
			pageTitle = TEXT
			pageTitle.data = page:title

			siteTitle = TEXT
			siteTitle.data = TSFE:tmpl|setup|sitetitle

			pageUid = TEXT
			pageUid.data = page:uid

			rootPage = TEXT
			rootPage.data = leveluid:0
		}
	}

	meta {
		X-UA-Compatible = IE=edge
		X-UA-Compatible.httpEquivalent = 1
		viewport = width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no
		robots = robots.txt

		description = {$page.meta.description}
		description.override.field = description

		author = {$page.meta.author}
		author.override.field = author

		keywords = {$page.meta.keywords}
		keywords.override.field = keywords
	}

	bodyTagCObject = COA
	bodyTagCObject {
		10 = TEXT
		10.field = layout

		20 = TEXT
		20.value = body-logo
		20.if.isTrue.field = tx_dptoolbox_logo
		20.noTrimWrap = | ||

		30 = TEXT
		30.value = project-list
		30.if.value.data = levelfield:-1, backend_layout_next_level, slide
		30.if.value.override.field = backend_layout
		30.if.equals = 2
		30.noTrimWrap = | ||

		40 = TEXT
		40.value = home
		40.if.value.data = levelfield:-1, backend_layout_next_level, slide
		40.if.value.override.field = backend_layout
		40.if.equals = 3
		40.noTrimWrap = | ||

		50 = TEXT
		50.value = project-detail
		50.if.value.data = levelfield:-1, backend_layout_next_level, slide
		50.if.value.override.field = backend_layout
		50.if.equals = 6
		50.noTrimWrap = | ||

		wrap = <body class="layout-|">
	}
}