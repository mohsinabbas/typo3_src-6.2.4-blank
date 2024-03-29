
/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

var BrowseLinks = {
	elements: {},
	addElements: function(elements) {
		BrowseLinks.elements = $H(BrowseLinks.elements).merge(elements).toObject();
	},
	focusOpenerAndClose: function(close) {
		if (close) {
			parent.window.opener.focus();
			parent.close();
		}
	}
};

	// when selecting one or multiple files, this action is called
BrowseLinks.File = {
	insertElement: function(index, close) {
		var result = false;
		if (typeof BrowseLinks.elements[index] !== undefined) {
			var element = BrowseLinks.elements[index];

			// insertElement takes the following parameters
			// table, uid, type, filename,fp,filetype,imagefile,action, close
			result = insertElement(
					element.table,
					element.uid,
					element.type,
					element.fileName,
					element.filePath,
					element.fileExt,
					element.fileIcon,
					'',
					close
			);
		}
		return result;
	},
	insertElementMultiple: function(list) {
		var uidList = [];
		list.each(function(index) {
			if (typeof BrowseLinks.elements[index] !== undefined) {
				var element = BrowseLinks.elements[index];
				uidList.push(element.uid);
			}
		});
		insertMultiple('sys_file', uidList);
		return true;
	}

};

BrowseLinks.Selector = {
	element: 'typo3-fileList',
	toggle: function(element) {
		var items = this.getItems(element);
		if (items.length) {
			items.each(function(item) {
				item.checked = (item.checked ? null : 'checked');
			});
		}
	},
	handle: function(element) {
		var items = this.getItems(element);
		var selectedItems = [];
		if (items.length) {
			items.each(function(item) {
				if (item.checked && item.name) {
					selectedItems.push(item.name);
				}
			});
			if (selectedItems.length == 1) {
				BrowseLinks.File.insertElement(selectedItems[0]);
			} else {
				BrowseLinks.File.insertElementMultiple(selectedItems);
			}
			BrowseLinks.focusOpenerAndClose(true);
		}
	},
	getParentElement: function(element) {
		element = $(element);
		return (element ? element : $(this.element));
	},
	getItems: function(element) {
		element = this.getParentElement(element);
		return Element.select(element, '.typo3-bulk-item');
	}
};

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * javascript functions regarding the page & folder tree
 * relies on the javascript library "prototype"
 *
 * @author	Benjamin Mack
 */

// new object-oriented drag and drop - code,
// tested in IE 6, Firefox 2, Opera 9
var DragDrop = {
	dragID: null,

	// options needed for doing the changes when dropping
	table: null,	// can be "pages" or "folders"
	changeURL: null,
	backPath: null,


	dragElement: function(event, elementID) {
		Event.stop(event); // stop bubbling
		this.dragID = this.getIdFromEvent(event);
		if (!this.dragID) {
			return false;
		}

		if (!elementID) {
			elementID = this.dragID;
		}
		if (!$('dragIcon')) {
			this.addDragIcon();
		}

		$('dragIcon').innerHTML = $('dragIconID_'+elementID).innerHTML +
								  $('dragTitleID_'+elementID).firstChild.innerHTML;

		document.onmouseup   = function(event) { DragDrop.cancelDragEvent(event); };
		document.onmousemove = function(event) { DragDrop.mouseMoveEvent(event); };
		return false;
	},

	dropElement: function(event) {
		var dropID = this.getIdFromEvent(event);
		if ((this.dragID) && (this.dragID !== dropID)) {
			var url = this.changeURL +
					'?dragDrop=' + this.table +
					'&srcId=' + this.dragID +
					'&dstId=' + dropID +
					'&backPath=' + this.backPath;
			showClickmenu_raw(url);
		}
		this.cancelDragEvent();
		return false;
	},


	cancelDragEvent: function(event) {
		this.dragID = null;
		if ($('dragIcon') && $('dragIcon').style.visibility === 'visible') {
			$('dragIcon').style.visibility = 'hidden';
		}

		document.onmouseup = null;
		document.onmousemove = null;
	},

	mouseMoveEvent: function(event) {
		if (!event) {
			event = window.event;
		}
		$('dragIcon').style.left = (Event.pointerX(event) + 5) + 'px';
		$('dragIcon').style.top  = (Event.pointerY(event) - 5) + 'px';
		$('dragIcon').style.visibility = 'visible';
		return false;
	},


	// -- helper functions --
	getIdFromEvent: function(event) {
		var obj = Event.element(event);
		while (obj.id == false && obj.parentNode) {
			obj = obj.parentNode;
		}
		return obj.id.substring(obj.id.indexOf('_') + 1);
	},

	// dynamically manipulates the DOM to add the div needed for drag&drop at the bottom of the <body>-tag
	addDragIcon: function() {
		var code = '<div id="dragIcon" style="visibility: hidden;">&nbsp;</div>';
		var insert = new Insertion.Bottom(document.getElementsByTagName('body')[0], code);
	}
};


var Tree = {
	ajaxID: 'SC_alt_db_navframe::expandCollapse',	// has to be either "SC_alt_db_navframe::expandCollapse" or "SC_alt_file_navframe::expandCollapse"
	frameSetModule: null,
	activateDragDrop: true,
	highlightClass: 'active',
	pageID: 0,

	// reloads a part of the page tree (useful when "expand" / "collapse")
	load: function(params, isExpand, obj, scopeData, scopeHash) {
		var scope = '';

		if (scopeData && scopeHash) {
			scope = '&scopeData=' + encodeURIComponent(scopeData) + '&scopeHash=' + encodeURIComponent(scopeHash);
		}

			// fallback if AJAX is not possible (e.g. IE < 6)
		if (typeof Ajax.getTransport() !== 'object') {
			window.location.href = TYPO3.settings.ajaxUrls[this.ajaxID] + '&PM=' + encodeURIComponent(params) + scope;
			return;
		}

		// immediately collapse the subtree and change the plus to a minus when collapsing
		// without waiting for the response
		if (!isExpand) {
			var ul = obj.parentNode.parentNode.getElementsByTagName('ul')[0];
			if (ul) {
				obj.parentNode.parentNode.removeChild(ul); // no remove() directly because of IE 5.5
			}
			var pm = Selector.findChildElements(obj.parentNode, ['.pm'])[0]; // Getting pm object by CSS selector (because document.getElementsByClassName() doesn't seem to work on Konqueror)
			if (pm) {
				pm.onclick = null;
				Element.cleanWhitespace(pm);
				pm.firstChild.src = pm.firstChild.src.replace('minus', 'plus');
			}
		} else {
			obj.style.cursor = 'wait';
		}
		var call = new Ajax.Request(TYPO3.settings.ajaxUrls[this.ajaxID], {
			method: 'get',
			parameters: 'PM=' + encodeURIComponent(params) + scope,
			onComplete: function(xhr) {
				// the parent node needs to be overwritten, not the object
				$(obj.parentNode.parentNode).replace(xhr.responseText);
				TYPO3PageTreeFilter.filter();
				this.registerDragDropHandlers();
				this.reSelectActiveItem();
			}.bind(this),
			onT3Error: function(xhr) {
				// if this is not a valid ajax response, the whole page gets refreshed
				this.refresh();
			}.bind(this)
		});
	},

	// does the complete page refresh (previously known as "_refresh_nav()")
	refresh: function() {
		var r = new Date();
		// randNum is useful so pagetree does not get cached in browser cache when refreshing
		var loc = window.location.href.replace(/&randNum=\d+|#.*/g, '');
		var addSign = loc.indexOf('?') > 0 ? '&' : '?';
		window.location = loc + addSign + 'randNum=' + r.getTime();
	},

	// attaches the events to the elements needed for the drag and drop (for the titles and the icons)
	registerDragDropHandlers: function() {
		if (!this.activateDragDrop) {
			return;
		}
		this._registerDragDropHandlers('dragTitle');
		this._registerDragDropHandlers('dragIcon');
	},

	_registerDragDropHandlers: function(className) {
		var elements = Selector.findChildElements($('tree'), ['.'+className]); // using Selector because document.getElementsByClassName() doesn't seem to work on Konqueror
		for (var i = 0; i < elements.length; i++) {
			Event.observe(elements[i], 'mousedown', function(event) { DragDrop.dragElement(event); }, true);
			Event.observe(elements[i], 'dragstart', function(event) { DragDrop.dragElement(event); }, false);
			Event.observe(elements[i], 'mouseup',   function(event) { DragDrop.dropElement(event); }, false);
		}
	},

	// selects the activated item again, in case it collapsed and got expanded again
	reSelectActiveItem: function() {
		var obj = $(top.fsMod.navFrameHighlightedID[this.frameSetModule]);
		if (obj) {
			Element.addClassName(obj, this.highlightClass);
			this.extractPageIdFromTreeItem(obj.id);
		}
	},

	// highlights an active list item in the page tree and registers it to the top-frame
	// used when loading the page for the first time
	highlightActiveItem: function(frameSetModule, highlightID) {
		this.frameSetModule = frameSetModule;
		this.extractPageIdFromTreeItem(highlightID);

		// Remove all items that are already highlighted
		var obj = $(top.fsMod.navFrameHighlightedID[frameSetModule]);
		if (obj) {
			var classes = $w(this.highlightClass);
			for (var i = 0; i < classes.length; i++)
				Element.removeClassName(obj, classes[i]);
		}

		// Set the new item
		top.fsMod.navFrameHighlightedID[frameSetModule] = highlightID;
		if ($(highlightID)) {
			Element.addClassName(highlightID, this.highlightClass);
		}
	},

	//extract pageID from the given id (pagesxxx_y_z where xxx is the ID)
	extractPageIdFromTreeItem: function(highlightID) {
		if(highlightID) {
			this.pageID = highlightID.split('_')[0].substring(5);
		}
	}
};




/**
 *
 * @author	Ingo Renner <ingo@typo3.org>
 **/
var PageTreeFilter = Class.create({
	field: 'treeFilter',
	resetfield: 'treeFilterReset',

	/**
	 * constructor with event listener
	 */
	initialize: function() {
			// event listener
		Event.observe(document, 'dom:loaded', function(){
			Event.observe(this.field, "keyup", this.filter.bindAsEventListener(this));
			Event.observe(this.resetfield, "click", this.resetSearchField.bindAsEventListener(this) );
		}.bind(this));
	},

	/**
	 * Filters the tree by setting a class on items not matching search input string
	 * tested in FF2, S3, IE6, IE7
	 */
	filter: function() {
		var searchString = $F(this.field).toLowerCase();

		var pages = $$('#treeRoot .dragTitle a');
		pages.each(function(el) {
			if (el.innerHTML.toLowerCase().include(searchString)) {
				el.up().removeClassName('not-found');
			} else {
				el.up().addClassName('not-found');
			}
		});
		this.toggleReset();

	},

	/**
	 * toggles the visibility of the reset button
	 */
	toggleReset: function() {
		var searchFieldContent = $F(this.field);
		var resetButton = $(this.resetfield);

		if (searchFieldContent != '' && resetButton.getStyle('visibility') == 'hidden') {
			resetButton.setStyle({ visibility: 'visible'} );
		} else if (searchFieldContent == '' && resetButton.getStyle('visibility') == 'visible') {
			resetButton.setStyle( {visibility: 'hidden'} );
		}
	},

	/**
	 * resets the search field
	 */
	resetSearchField: function() {
		if ($(this.resetfield).getStyle('visibility') == 'visible') {
			$(this.field).value = '';
			this.filter('');
		}
	}
});


// Call this function, refresh_nav(), from another script in the backend if you want
// to refresh the navigation frame (eg. after having changed a page title or moved pages etc.)
// please use the function in the "Tree" object for future implementations
function refresh_nav() {
	window.setTimeout('Tree.refresh();',0);
}

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * javascript functions regarding the TYPO3 wrapper
 * for the javascript library "prototype"
 *
 * Please make sure that prototype.js is loaded before loading this
 * file in your script, the responder is only added if prototype was loaded
 */

if (Prototype) {
	// adding generic a responder to use when a AJAX request is done
	Ajax.Responders.register({
		onCreate: function(request, transport) {

			// if the TYPO3 AJAX backend is used,
			// the onSuccess & onComplete callbacks are hooked
			if (request.url.indexOf("ajax.php") === -1) {
				return;
			}

			var origSuccess = request.options.onSuccess, origComplete = request.options.onComplete;

			// hooking "onSuccess"
			if (origSuccess) {
				request.options.onSuccess = function(xhr, json) {
					if (!json) {
						T3AJAX.showError(xhr);
					} else {
						origSuccess(xhr, json);
					}
				}
			}

			// hooking "onComplete", using T3Error handler if available
			if (origComplete) {
				request.options.onComplete = function(xhr, json) {
					if (!json && request.options.onT3Error) {
						request.options.onT3Error(xhr, json);
					} else if (!json) {
						T3AJAX.showError(xhr);
					} else {
						origComplete(xhr, json);
					}
				};
			}
		}
	});
}

var T3AJAX = {};
T3AJAX.showError = function(xhr, json) {
	if (typeof xhr.responseText !== undefined && xhr.responseText) {
		if (typeof Ext.MessageBox !== undefined) {
			Ext.MessageBox.alert('TYPO3', xhr.responseText);
		}
		else {
			alert(xhr.responseText);
		}
	}
};

// common storage and global object, could later hold more information about the current user etc.
if (typeof TYPO3 === undefined) {
	// window definition required, otherwise IE8 clears TYPO3 variable completely
	window['TYPO3'] = {};
}
TYPO3 = Ext.apply(TYPO3, {
	// store instances that only should be running once
	_instances: {},
	getInstance: function(className) {
		return TYPO3._instances[className] || false;
	},
	addInstance: function(className, instance) {
		TYPO3._instances[className] = instance;
		return instance;
	},

	helpers: {
		// creates an array by splitting a string into parts, taking a delimiter
		split: function(str, delim) {
			var res = [];
			while (str.indexOf(delim) > 0) {
				res.push(str.substr(0, str.indexOf(delim)));
				str = str.substr(str.indexOf(delim) + delim.length);
			}
			return res;
		}
	}
});

/*
 * This code has been copied from Project_CMS
 * Copyright (c) 2005 by Phillip Berndt (www.pberndt.com)
 *
 * Extended Textarea for IE and Firefox browsers
 * Features:
 *  - Possibility to place tabs in <textarea> elements using a simply <TAB> key
 *  - Auto-indenting of new lines
 *
 * License: GNU General Public License
 */

function checkBrowser() {
	browserName = navigator.appName;
	browserVer = parseInt(navigator.appVersion);

	ok = false;
	if (browserName == "Microsoft Internet Explorer" && browserVer >= 4) {
		ok = true;
	} else if (browserName == "Netscape" && browserVer >= 3) {
		ok = true;
	}

	return ok;
}

	// Automatically change all textarea elements
function changeTextareaElements() {
	if (!checkBrowser()) {
			// Stop unless we're using IE or Netscape (includes Mozilla family)
		return false;
	}

	document.textAreas = document.getElementsByTagName("textarea");

	for (i = 0; i < document.textAreas.length; i++) {
			// Only change if the class parameter contains "enable-tab"
		if (document.textAreas[i].className && document.textAreas[i].className.search(/(^| )enable-tab( |$)/) != -1) {
			document.textAreas[i].textAreaID = i;
			makeAdvancedTextArea(document.textAreas[i]);
		}
	}
}

	// Wait until the document is completely loaded.
	// Set a timeout instead of using the onLoad() event because it could be used by something else already.
window.setTimeout("changeTextareaElements();", 200);

	// Turn textarea elements into "better" ones. Actually this is just adding some lines of JavaScript...
function makeAdvancedTextArea(textArea) {
	if (textArea.tagName.toLowerCase() != "textarea") {
		return false;
	}

		// On attempt to leave the element:
		// Do not leave if this.dontLeave is true
	textArea.onblur = function(e) {
		if (!this.dontLeave) {
			return;
		}
		this.dontLeave = null;
		window.setTimeout("document.textAreas[" + this.textAreaID + "].restoreFocus()", 1);
		return false;
	}

		// Set the focus back to the element and move the cursor to the correct position.
	textArea.restoreFocus = function() {
		this.focus();

		if (this.caretPos) {
			this.caretPos.collapse(false);
			this.caretPos.select();
		}
	}

		// Determine the current cursor position
	textArea.getCursorPos = function() {
		if (this.selectionStart) {
			currPos = this.selectionStart;
		} else if (this.caretPos) {	// This is very tricky in IE :-(
			oldText = this.caretPos.text;
			finder = "--getcurrpos" + Math.round(Math.random() * 10000) + "--";
			this.caretPos.text += finder;
			currPos = this.value.indexOf(finder);

			this.caretPos.moveStart('character', -finder.length);
			this.caretPos.text = "";

			this.caretPos.scrollIntoView(true);
		} else {
			return;
		}

		return currPos;
	}

		// On tab, insert a tabulator. Otherwise, check if a slash (/) was pressed.
	textArea.onkeydown = function(e) {
		if (this.selectionStart == null &! this.createTextRange) {
			return;
		}
		if (!e) {
			e = window.event;
		}

			// Tabulator
		if (e.keyCode == 9) {
			this.dontLeave = true;
			this.textInsert(String.fromCharCode(9));
		}

			// Newline
		if (e.keyCode == 13) {
				// Get the cursor position
			currPos = this.getCursorPos();

				// Search the last line
			lastLine = "";
			for (i = currPos - 1; i >= 0; i--) {
				if(this.value.substring(i, i + 1) == '\n') {
					break;
				}
			}
			lastLine = this.value.substring(i + 1, currPos);

				// Search for whitespaces in the current line
			whiteSpace = "";
			for (i = 0; i < lastLine.length; i++) {
				if (lastLine.substring(i, i + 1) == '\t') {
					whiteSpace += "\t";
				} else if (lastLine.substring(i, i + 1) == ' ') {
					whiteSpace += " ";
				} else {
					break;
				}
			}

				// Another ugly IE hack
			if (navigator.appVersion.match(/MSIE/)) {
				whiteSpace = "\\n" + whiteSpace;
			}

				// Insert whitespaces
			window.setTimeout("document.textAreas["+this.textAreaID+"].textInsert(\""+whiteSpace+"\");", 1);
		}
	}

		// Save the current cursor position in IE
	textArea.onkeyup = textArea.onclick = textArea.onselect = function(e) {
		if (this.createTextRange) {
			this.caretPos = document.selection.createRange().duplicate();
		}
	}

		// Insert text at the current cursor position
	textArea.textInsert = function(insertText) {
		if (this.selectionStart != null) {
			var savedScrollTop = this.scrollTop;
			var begin = this.selectionStart;
			var end = this.selectionEnd;
			if (end > begin + 1) {
				this.value = this.value.substr(0, begin) + insertText + this.value.substr(end);
			} else {
				this.value = this.value.substr(0, begin) + insertText + this.value.substr(begin);
			}

			this.selectionStart = begin + insertText.length;
			this.selectionEnd = begin + insertText.length;
			this.scrollTop = savedScrollTop;
		} else if (this.caretPos) {
			this.caretPos.text = insertText;
			this.caretPos.scrollIntoView(true);
		} else {
			text.value += insertText;
		}

		this.focus();
	}
}
/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

Ext.ns('TYPO3', 'TYPO3.CSH.ExtDirect');

/**
 * Class to show tooltips for links that have the css t3-help-link
 * need the tags data-table and data-field (HTML5)
 */


TYPO3.ContextHelp = function() {

	/**
	 * Cache for CSH
	 * @type {Ext.util.MixedCollection}
	 */
	var cshHelp = new Ext.util.MixedCollection(true),
	tip;

	/**
	 * Shows the tooltip, triggered from mouseover event handler
	 *
	 */
	function showToolTipHelp() {
		var link = tip.triggerElement;
		if (!link) {
			return false;
		}
		var table = link.getAttribute('data-table');
		var field = link.getAttribute('data-field');
		var key = table + '.' + field;
		var response = cshHelp.key(key);
		tip.target = tip.triggerElement;
		if (response) {
			updateTip(response);
		} else {
				// If a table is defined, use ExtDirect call to get the tooltip's content
			if (table) {
				var description = '';
				if (typeof(top.TYPO3.LLL) !== 'undefined') {
					description = top.TYPO3.LLL.core.csh_tooltip_loading;
				} else if (opener && typeof(opener.top.TYPO3.LLL) !== 'undefined') {
					description = opener.top.TYPO3.LLL.core.csh_tooltip_loading;
				}

					// Clear old tooltip contents
				updateTip({
					description: description,
					cshLink: '',
					moreInfo: '',
					title: ''
				});
					// Load content
				TYPO3.CSH.ExtDirect.getTableContextHelp(table, function(response, options) {
					Ext.iterate(response, function(key, value){
						cshHelp.add(value);
						if (key === field) {
							updateTip(value);
								// Need to re-position because the height may have increased
							tip.show();
						}
					});
				}, this);

				// No table was given, use directly title and description
			} else {
				updateTip({
					description: link.getAttribute('data-description'),
					cshLink: '',
					moreInfo: '',
					title: link.getAttribute('data-title')
				});
			}
		}
	}

	/**
	 * Update tooltip message
	 *
	 * @param {Object} response
	 */
	function updateTip(response) {
		tip.body.dom.innerHTML = response.description;
		tip.cshLink = response.id;
		tip.moreInfo = response.moreInfo;
		if (tip.moreInfo) {
			tip.addClass('tipIsLinked');
		}
		tip.setTitle(response.title);
		tip.doAutoWidth();
	}

	return {
		/**
		 * Constructor
		 */
		init: function() {
			tip = new Ext.ToolTip({
				title: 'CSH', // needs a title for init because of the markup
				html: '',
					// The tooltip will appear above the label, if viewport allows
				anchor: 'bottom',
				minWidth: 160,
				maxWidth: 240,
				target: Ext.getBody(),
				delegate: 'span.t3-help-link',
				renderTo: Ext.getBody(),
				cls: 'typo3-csh-tooltip',
				shadow: false,
				dismissDelay: 0, // tooltip stays while mouse is over target
				autoHide: true,
				showDelay: 1000, // show after 1 second
				hideDelay: 300, // hide after 0.3 seconds
				closable: true,
				isMouseOver: false,
				listeners: {
					beforeshow: showToolTipHelp,
					render: function(tip) {
						tip.body.on({
							'click': {
								fn: function(event) {
									event.stopEvent();
									if (tip.moreInfo) {
										try {
											top.TYPO3.ContextHelpWindow.open(tip.cshLink);
										} catch(e) {
											// do nothing
										}
									}
									tip.hide();
								}
							}
						});
						tip.el.on({
							'mouseover': {
								fn: function() {
									if (tip.moreInfo) {
										tip.isMouseOver = true;
									}
								}
							},
							'mouseout': {
								fn: function() {
									if (tip.moreInfo) {
										tip.isMouseOver = false;
										tip.hide.defer(tip.hideDelay, tip, []);
									}
								}
							}
						});
					},
					hide: function(tip) {
						tip.setTitle('');
						tip.body.dom.innerHTML = '';
					},
					beforehide: function(tip) {
						return !tip.isMouseOver;
					},
					scope: this
				}
			});

			Ext.getBody().on({
				'keydown': {
					fn: function() {
						tip.hide();
					}
				},
				'click': {
					fn: function() {
						tip.hide();
					}
				}
			});

			/**
			 * Adds a sequence to Ext.TooltTip::showAt so as to increase vertical offset when anchor position is 'bottom'
			 * This positions the tip box closer to the target element when the anchor is on the bottom side of the box
			 * When anchor position is 'top' or 'bottom', the anchor is pushed slightly to the left in order to align with the help icon, if any
			 *
			 */
			Ext.ToolTip.prototype.showAt = Ext.ToolTip.prototype.showAt.createSequence(
				function() {
					var ap = this.getAnchorPosition().charAt(0);
					if (this.anchorToTarget && !this.trackMouse) {
						switch (ap) {
							case 'b':
								var xy = this.getPosition();
								this.setPagePosition(xy[0]-10, xy[1]+5);
								break;
							case 't':
								var xy = this.getPosition();
								this.setPagePosition(xy[0]-10, xy[1]);
								break;
						}
					}
				}
			);

		},

		/**
		 * Opens the help window, triggered from click event handler
		 *
		 * @param {Event} event
		 * @param {Node} link
		 */
		openHelpWindow: function(event, link) {
			var id = link.getAttribute('data-table') + '.' + link.getAttribute('data-field');
			event.stopEvent();
			top.TYPO3.ContextHelpWindow.open(id);
		}
	}
}();

/**
 * Calls the init on Ext.onReady
 */
Ext.onReady(TYPO3.ContextHelp.init, TYPO3.ContextHelp);

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Flashmessage rendered by ExtJS
 *
 *
 * @author Steffen Kamper <info@sk-typo3.de>
 */
Ext.ns('TYPO3');

/**
 * Object for named severities
 */
TYPO3.Severity = {
	notice: 0,
	information: 1,
	ok: 2,
	warning: 3,
	error: 4
};

/**
 * @class TYPO3.Flashmessage
 * Passive popup box singleton
 * @singleton
 *
 * Example (Information message):
 * TYPO3.Flashmessage.display(1, 'TYPO3 Backend - Version 4.4', 'Ready for take off', 3);
 */
TYPO3.Flashmessage = function() {
	var messageContainer;
	var severities = ['notice', 'information', 'ok', 'warning', 'error'];

	function createBox(severity, title, message) {
		return ['<div class="typo3-message message-', severity, '" style="width: 400px">',
				'<div class="t3-icon t3-icon-actions t3-icon-actions-message t3-icon-actions-message-close t3-icon-message-' + severity + '-close"></div>',
				'<div class="header-container">',
				'<div class="message-header">', title, '</div>',
				'</div>',
				'<div class="message-body">', message, '</div>',
				'</div>'].join('');
	}

	return {
		/**
		 * Shows popup
		 * @member TYPO3.Flashmessage
		 * @param int severity (0=notice, 1=information, 2=ok, 3=warning, 4=error)
		 * @param string title
		 * @param string message
		 * @param float duration in sec (default 5)
		 */
		display : function(severity, title, message, duration) {
			duration = duration || 5;
			if (!messageContainer) {
				messageContainer = Ext.DomHelper.insertFirst(document.body, {
					id   : 'msg-div',
					style: 'position:absolute;z-index:10000'
				}, true);
			}

			var box = Ext.DomHelper.append(messageContainer, {
				html: createBox(severities[severity], title, message)
			}, true);
			messageContainer.alignTo(document, 't-t');
			box.child('.t3-icon-actions-message-close').on('click',	function (e, t, o) {
				var node;
				node = new Ext.Element(Ext.get(t).findParent('div.typo3-message'));
				node.hide();
				Ext.removeNode(node.dom);
			}, box);
			box.slideIn('t').pause(duration).ghost('t', {remove: true});
		}
	};
}();
