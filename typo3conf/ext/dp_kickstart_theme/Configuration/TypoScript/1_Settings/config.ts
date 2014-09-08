config {
	baseURL								= {$config.baseURL}

	doctype								= html5
	renderCharset						= utf-8
	metaCharset							= utf-8
	xhtml_cleaning						= all

	admPanel							= 0
	noPageTitle							= 2

	removeDefaultJS						= external
	inlineStyle2TempFile				= 1

	compressCss							= 1
	compressJs							= 1
	concatenateCss						= 1
	concatenateJs						= 1

	language							= de
	htmlTag_langKey						= de
	locale_all							= de_DE.UTF-8
	sys_language_uid					= 0

	cache_period						= 43200
	cache_clearAtMidnight				= 1
	sendCacheHeaders					= 0

	tx_realurl_enable					= 0
	simulateStaticDocuments				= 0

	index_enable						= 0
	index_externals						= 0

	disablePrefixComment				= 1
	linkVars							= L
	meaningfulTempFilePrefix			= 10

	spamProtectEmailAddresses			= 1

	headerComment (
powered by TYPO3 & dotpulse AG
Thank you for reading our source code!
Any suggestions or questions?
Please contact us: http://www.dotpulse.ch/

===
	)
}

[globalVar = GP:L = 1]
config.language							= en
config.htmlTag_langKey					= en
config.locale_all						= en_EN.UTF-8
config.sys_language_uid					= 1
[global]

config.htmlTag_stdWrap {
	setContentToCurrent = 1
	cObject = COA
	cObject {
		10 = TEXT
		10.value = class="no-js"
		10.noTrimWrap = | | |
		20 = TEXT
		20.value < config.htmlTag_langKey
		20.wrap = lang="|"
		wrap = <html | >
	}
}

[browser = msie] && [version < 7]
config.htmlTag_stdWrap.cObject.10.value = class="no-js lt-ie11 lt-ie10 lt-ie9 lt-ie8 lt-ie7"
[browser = msie] && [version = 7]
config.htmlTag_stdWrap.cObject.10.value = class="no-js lt-ie11 lt-ie10 lt-ie9 lt-ie8"
[browser = msie] && [version = 8]
config.htmlTag_stdWrap.cObject.10.value = class="no-js lt-ie11 lt-ie10 lt-ie9"
[browser = msie] && [version = 9]
config.htmlTag_stdWrap.cObject.10.value = class="no-js lt-ie11 lt-ie10"
[browser = msie] && [version = 10]
config.htmlTag_stdWrap.cObject.10.value = class="no-js lt-ie11"
[global]