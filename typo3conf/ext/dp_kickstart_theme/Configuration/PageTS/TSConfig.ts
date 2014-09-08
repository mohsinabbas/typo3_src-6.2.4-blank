TCEMAIN.permissions {
    # ID of the backend user that will own new pages
    userid = 1
    # ID of the backend group that will own new pages
    groupid = 1
    user = show, editcontent, edit, delete, new
    group = show, editcontent, edit, delete, new
}

TCEFORM {
    pages {
        backend_layout {
            PAGE_TSCONFIG_ID = {$page.specialPages.page_tsconfig_id}
            removeItems= -1
            altLabels.0 = Vordefiniertes Layout
        }
        backend_layout_next_level {
            PAGE_TSCONFIG_ID = {$page.specialPages.page_tsconfig_id}
            removeItems= -1
            altLabels.0 = Vordefiniertes Layout
        }

        layout {
            altLabels.0 = Default
            altLabels.1 = braun
            altLabels.2 = hellbraun
            altLabels.3 = Verlauf
        }

        subtitle.disabled = 1
        abstract.disabled = 1
        author.disabled = 1
        author_email.disabled = 1
        alias.disabled = 1
        newUntil.disabled = 1
        target.disabled = 1
        url_scheme.disabled = 1
        editlock.disabled = 1
        php_tree_stop.disabled = 1
    }

    tt_content {
        # Überschriften
        header_layout {
            removeItems = 5,6
            altLabels {
                0 = Default (H1)
                1 = H1: Überschrift 1
                2 = H2: Überschrift 2
                3 = H3: Überschrift 3
                4 = H4: Überschrift 4
            }
        }

        section_frame {
            removeItems = 1,5,6,10,11,12,20,21

            altLabels.0 = Standard
            altLabels.66 = ohne Frame (DIV)
        }

        subheader.disabled = 1
        header_link.disabled = 1
        date.disabled = 1
        linkToTop.disabled = 1
        rte_enabled.disabled = 1
        image_noRows.disabled = 1
        image_compression.disabled = 1
        image_effects.disabled = 1
        layout.disabled = 1
    }
}

mod.SHARED {
    defaultLanguageFlag = de.gif
    defaultLanguageLabel = German
}

#*** RTE Classe des Interface (Ausrichtung)
RTE.classes {
    align-left {
        name = LLL:EXT:rtehtmlarea/htmlarea/locallang_tooltips.xml:justifyleft
        value = text-align: left;
    }
    align-center {
        name = LLL:EXT:rtehtmlarea/htmlarea/locallang_tooltips.xml:justifycenter
        value = text-align: center;
    }
    align-right {
        name = LLL:EXT:rtehtmlarea/htmlarea/locallang_tooltips.xml:justifyright
        value = text-align: right;
    }
}

#
# *** Entfernt das Bild vor den Links
RTE.classesAnchor {
    internalLink {
        class = internal-link
        type = page
        image >
        titleText =
    }
    externalLink {
        class = external-link
        type = url
        image >
        titleText =
    }
    externalLinkInNewWindow {
        class = external-link-new-window
        type = url
        image >
        titleText =
    }
    internalLinkInNewWindow {
        class = internal-link-new-window
        type = page
        image >
        titleText =
    }
    download {
        class = download
        type = file
        image >
        titleText =
    }
    mail {
        class = mail
        type = mail
        image >
        titleText =
    }
}

## RTE Konfiguration
RTE.default {
    ## Markup options
    enableWordClean = 1
    removeTrailingBR = 1
    removeComments = 1
    removeTags = center, sdfield
    removeTagsAndContents = style,script

    # Buttons die gezeigt/versteckt werden
    showButtons = formatblock, left, center, right, orderedlist, unorderedlist, bold, italic, underline, insertcharacter, link, findreplace, chMode, removeformat, undo, redo, subscript, superscript
    hideButtons = blockstylelabel, blockstyle, textstylelabel, textstyle, fontstyle, fontsize, insertparagraphbefore, insertparagraphafter, lefttoright, righttoleft, language, showlanguagemarks, justifyfull, definitionlist, definitionitem, outdent, indent, formattext, bidioverride, big, citation, code, definition, deletedtext, emphasis, insertedtext, keyboard, monospaced, quotation, sample, small, span, strikethrough, strong, variable, textcolor, bgcolor, textindicator, editelement, showmicrodata, emoticon, insertsofthyphen, line, unlink, image, user, acronym, spellcheck, inserttag, copy, cut, paste, pastetoggle, pastebehaviour, about, toggleborders, table, tableproperties, tablerestyle, rowproperties, rowinsertabove, rowinsertunder, rowdelete, rowsplit, columnproperties, columninsertbefore, columninsertafter, columndelete, columnsplit, cellproperties, cellinsertbefore, cellinsertafter, celldelete, cellsplit, cellmerge

    buttons.formatblock {
        removeItems = article, address, aside, div, footer, header, nav, h5, h6, pre, blockquote, section

        items.h1.label = H1: Überschrift 1
        items.h2.label = H2: Überschrift 2
        items.h3.label = H3: Überschrift 3
        items.h4.label = H4: Überschrift 4
    }

    # Hält die RTE Icons gegroupt zusammen
    keepButtonGroupTogether = 1

    # blendet Statusbar in htmlarea aus
    showStatusBar =  1

    ## Add styles Left, center and right alignment of text in paragraphs and cells.
    inlineStyle.text-alignment (
        p.align-left, h1.align-left, h2.align-left, h3.align-left, h4.align-left, h5.align-left, h6.align-left, td.align-left { text-align: left; }
        p.align-center, h1.align-center, h2.align-center, h3.align-center, h4.align-center, h5.align-center, h6.align-center, td.align-center { text-align: center; }
        p.align-right, h1.align-right, h2.align-right, h3.align-right, h4.align-right, h5.align-right, h6.align-right, td.align-right { text-align: right; }
    )

    ## Use stylesheet file rather than the above mainStyleOverride and inlineStyle properties to style the contents (htmlArea RTE only)
    ignoreMainStyleOverride = 1

    proc {
        # tags die erlaubt / verboten sind
        allowTags = div, p, br, span, ul, ol, li, strong, em, b, i, u, sub, sup, strike, a, img, center, h1, h2, h3, h4, h5, h6, iframe
        denyTags = font, re, blockquote, nobr, hr, tt, q, cite, abbr, acronym, table, thead, tbody, tr, th, td

        # br wird nicht zu p konvertiert
        dontConvBRtoParagraph = 1

        # tags sind erlaubt außerhalt von p, div
        allowTagsOutside = img,hr, iframe

        # erlaubte attribute in p, div tags
        keepPDIVattribs = align,class,style,id

        # List all class selectors that are allowed on the way to the database
        allowedClasses (
            external-link, external-link-new-window, internal-link, internal-link-new-window, download, mail,
            align-left, align-center, align-right
        )

        # html parser einstellungen
        HTMLparser_rte {
            # tags die erlaubt/verboten sind
            allowTags < RTE.default.proc.allowTags
            denyTags < RTE.default.proc.denyTags

            # tags die untersagt sind
            removeTags = font

            # entfernt html-kommentare
            removeComments = 1

            # tags die nicht übereinstimmen werden nicht entfernt (protect / 1 / 0)
            keepNonMatchedTags = 0
        }

        # Content to database
        entryHTMLparser_db = 1
        entryHTMLparser_db {
            # tags die erlaubt/verboten sind
            allowTags < RTE.default.proc.allowTags
            denyTags < RTE.default.proc.denyTags

            # CLEAN TAGS
            noAttrib = b, i, u, strike, sub, sup, strong, em, quote, blockquote, cite, tt, br, center

            rmTagIfNoAttrib = span,div,font

            # htmlSpecialChars = 1

            ## align attribute werden erlaubt
            tags {
                p.fixAttrib.align.unset >
                p.allowedAttribs = class,style,align

                div.fixAttrib.align.unset >

                hr.allowedAttribs = class

                # b und i tags werden ersetzt (em / strong)
                b.remap = strong
                i.remap = em

                ## img tags werden erlaubt
                img >
            }
        }
    }

    # Classes: Ausrichtung
    classesParagraph (
        align-left, align-center, align-right
    )

    # Classes: Eigene Stile
    classesCharacter = author
    classesImage= rte_image

    # Classes für Links (These classes should also be in the list of allowedClasses)
    classesAnchor = external-link, external-link-new-window, internal-link, internal-link-new-window, download, mail
    classesAnchor.default {
        page = internal-link
        url = external-link-new-window
        file = download
        mail = mail
    }

    # zeigt alle CSS-Klassen die in formate.css vorhanden sind
    #showTagFreeClasses = 1

    # Do not allow insertion of the following tags
    hideTags = font

    # Tabellen Optionen in der RTE Toolbar
    hideTableOperationsInToolbar = 0
    keepToggleBordersInToolbar = 1

    # Tabellen Editierungs-Optionen (cellspacing/ cellpadding / border)
    disableSpacingFieldsetInTableOperations = 1
    disableAlignmentFieldsetInTableOperations=1
    disableColorFieldsetInTableOperations=1
    disableLayoutFieldsetInTableOperations=1
    disableBordersFieldsetInTableOperations=0
}

# Use same processing as on entry to database to clean content pasted into the editor
RTE.default.enableWordClean.HTMLparser < RTE.default.proc.entryHTMLparser_db

# FE RTE configuration (htmlArea RTE only)
RTE.default.FE < RTE.default
RTE.default.FE.userElements >
RTE.default.FE.userLinks >

# Breite des RTE in Fullscreen-Ansicht
TCEFORM.tt_content.bodytext.RTEfullScreenWidth= 80%
