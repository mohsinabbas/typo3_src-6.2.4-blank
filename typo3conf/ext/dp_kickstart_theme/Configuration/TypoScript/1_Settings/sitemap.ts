google_sitemap = PAGE
google_sitemap {
	# URL Parameter type=1234. Nicht nur Relevant wenn man mit realurl arbeitet.
	typeNum = 1234
	config {
		# Charset soll utf-8 sein
		metaCharset = utf-8
		# TYPO3 Header Code deaktivieren
		disableAllHeaderCode = 1
		# Content-type anpassen
		additionalHeaders = Content-type:text/xml;charset=utf-8
		# Seite nicht Cachen
		no_cache = 1
		# Kein xhtml cleaning durch TYPO3
		xhtml_cleaning = 0
	}

	# Hilfs Code für manuellen Zeilenumbruch im Quellcode
	append = TEXT
	append.char = 10

	10 = TEXT
	10.value = <?xml version="1.0" encoding="UTF-8"?>
	10.append < .append

	30 = COA
	30 {
		wrap = <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">|</urlset>

		1 = LOAD_REGISTER
		1 {
			# Beispiel wenn man nicht die Default Sprache L=0 ausgeben will
			# 1:DE / 2:FR / 3:IT / 4:EN  etc.. ( je nach config )
			langparam = &L=1
		}

		# ROOTLEVEL ITEM
		10 = COA
		10 {

			10 = TEXT
			10 {
				wrap = <loc>{getIndpEnv:TYPO3_SITE_URL}|</loc>
				insertData = 1
				typolink {
					parameter.data = leveluid:0
					# Einbinden wenn nicht L=0
					#additionalParams = {register:langparam}
					#additionalParams.insertData = 1
					returnLast = url
				}
			}
			20 = RECORDS
			20 {
				source = pages_{leveluid:0}
				source.insertData = 1
				dontCheckPid = 1
				tables = pages
				conf.pages = TEXT
				conf.pages {
					wrap = <lastmod>|</lastmod>
					data = field:lastUpdated // field:SYS_LASTCHANGED // field:tstamp // field:crdate
					date = c
				}
			}

			30 = TEXT
			30 {
				wrap = <changefreq>|</changefreq>
				# Mögliche Werte:
				# always / hourly / daily / weekly / monthly / yearly / never
				value = daily
				# output kosmetik
				#append < google_sitemap.append
			}
			40 = TEXT
			40 {
				wrap = <priority>|</priority>
				# 0.1 - 1.0
				value = 1.0
				# output kosmetik
				#append < google_sitemap.append
			}
			stdWrap.wrap = <url>|</url>
			stdWrap.prepend < google_sitemap.append
		}

		20 = HMENU
		20 {
			excludeUidList = {$google_sitemap.excludeUidList}

			1 = TMENU
			1 {
				expAll = 1
				noBlur = 1

				NO {
					doNotLinkIt = 1
					doNotShowLink = 1
					stdWrap2 {
						# diverese informationen aufbereiten
						cObject = COA
						cObject {

							1 = SYS_LASTCHANGEDOAD_REGISTER
							1 {
								title {
									field = title
									htmlSpecialChars = 1
								}
							}

							# loc
							10 = TEXT
							10 {
								wrap = <loc>{getIndpEnv:TYPO3_SITE_URL}|</loc>
								insertData = 1
								typolink {
									parameter.field = uid
									# Einbinden wenn nicht L=0
									#additionalParams = {register:langparam}
									#additionalParams.insertData = 1
									returnLast = url
								}
								# output kosmetik
								#prepend < google_sitemap.append
								#append < google_sitemap.append
							}

							# lastmod
							20 = TEXT
							20 {
								wrap = <lastmod>|</lastmod>
								data = field:lastUpdated // field:SYS_LASTCHANGED // field:tstamp // field:crdate
								date = c
								# output kosmetik
								#append < google_sitemap.append
							}

							# changefreq
							30 = TEXT
							30 {
								wrap = <changefreq>|</changefreq>
								# always / hourly / daily / weekly / monthly / yearly / never
								value = monthly
								# output kosmetik
								#append < google_sitemap.append
							}
							# entfernt damit XML nicht ueber 50KB
							30 >

							# priority
							40 = TEXT
							40 {
								wrap = <priority>|</priority>
								# 0.1 - 1.0
								value = 1.0
								# output kosmetik
								#append < google_sitemap.append
							}

							stdWrap.wrap = <url>|</url>
							stdWrap.prepend < google_sitemap.append
							#stdWrap.append < google_sitemap.append
						}
					}

					append < google_sitemap.append
				}

			}

			2 = TMENU
			2 < .1
			2.NO.stdWrap2.cObject.40.value = 0.9

			3 = TMENU
			3 < .1
			3.NO.stdWrap2.cObject.40.value = 0.9

			4 = TMENU
			4 < .1
			4.NO.stdWrap2.cObject.40.value = 0.8

			5 = TMENU
			5 < .1
			5.NO.stdWrap2.cObject.40.value = 0.7

			6 = TMENU
			6 < .1
			6.NO.stdWrap2.cObject.40.value = 0.7
		}

		# Spezielle Seiten, welche nicht über die normale Navigation wie
		# zum Beispiel: News / Events / Disclaimer / Impressum / Metanavigation
		# erreichbar sind und im *Menü nicht anzeigen* haben.
		30 = HMENU
		30 < .20
		30 {
			special = list
			special.value = {$google_sitemap.includeSpecialUidList}
			includeNotInMenu = 1
		}
	}
}