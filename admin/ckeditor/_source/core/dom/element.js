/*
Copyright (c) 2003-2010, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

/**
 * @fileOverview Defines the {@link CKEDITOR.dom.element} class, which
 *		represents a DOM element.
 */

/**
 * Represents a DOM element.
 * @constructor
 * @augments CKEDITOR.dom.node
 * @param {Object|String} element A native DOM element or the element name for
 *		new elements.
 * @param {CKEDITOR.dom.document} [ownerDocument] The document that will contain
 *		the element in case of element creation.
 * @example
 * // Create a new &lt;span&gt; element.
 * var element = new CKEDITOR.dom.element( 'span' );
 * @example
 * // Create an element based on a native DOM element.
 * var element = new CKEDITOR.dom.element( document.getElementById( 'myId' ) );
 */
CKEDITOR.dom.element = function( element, ownerDocument )
{
	if ( typeof element == 'string' )
		element = ( ownerDocument ? ownerDocument.$ : document ).createElement( element );

	// Call the base constructor (we must not call CKEDITOR.dom.node).
	CKEDITOR.dom.domObject.call( this, element );
};

// PACKAGER_RENAME( CKEDITOR.dom.element )

/**
 * The the {@link CKEDITOR.dom.element} representing and element. If the
 * element is a native DOM element, it will be transformed into a valid
 * CKEDITOR.dom.element object.
 * @returns {CKEDITOR.dom.element} The transformed element.
 * @example
 * var element = new CKEDITOR.dom.element( 'span' );
 * alert( element == <b>CKEDITOR.dom.element.get( element )</b> );  "true"
 * @example
 * var element = document.getElementById( 'myElement' );
 * alert( <b>CKEDITOR.dom.element.get( element )</b>.getName() );  e.g. "p"
 */
CKEDITOR.dom.element.get = function( element )
{
	return element && ( element.$ ? element : new CKEDITOR.dom.element( element ) );
};

CKEDITOR.dom.element.prototype = new CKEDITOR.dom.node();

/**
 * Creates an instance of the {@link CKEDITOR.dom.element} class based on the
 * HTML representation of an element.
 * @param {String} html The element HTML. It should define only one element in
 *		the "root" level. The "root" element can have child nodes, but not
 *		siblings.
 * @returns {CKEDITOR.dom.element} The element instance.
 * @example
 * var element = <b>CKEDITOR.dom.element.createFromHtml( '&lt;strong class="anyclass"&gt;My element&lt;/strong&gt;' )</b>;
 * alert( element.getName() );  // "strong"
 */
CKEDITOR.dom.element.createFromHtml = function( html, ownerDocument )
{
	var temp = new CKEDITOR.dom.element( 'div', ownerDocument );
	temp.setHtml( html );

	// When returning the node, remove it from its parent to detach it.
	return temp.getFirst().remove();
};

CKEDITOR.dom.element.setMarker = function( database, element, name, value )
{
	var id = element.getCustomData( 'list_marker_id' ) ||
			( element.setCustomData( 'list_marker_id', CKEDITOR.tools.getNextNumber() ).getCustomData( 'list_marker_id' ) ),
		markerNames = element.getCustomData( 'list_marker_names' ) ||
			( element.setCustomData( 'list_marker_names', {} ).getCustomData( 'list_marker_names' ) );
	database[id] = element;
	markerNames[name] = 1;

	return element.setCustomData( name, value );
};

CKEDITOR.dom.element.clearAllMarkers = function( database )
{
	for ( var i in database )
		CKEDITOR.dom.element.clearMarkers( database, database[i], true );
};

CKEDITOR.dom.element.clearMarkers = function( database, element, removeFromDatabase )
{
	var names = element.getCustomData( 'list_marker_names' ),
		id = element.getCustomData( 'list_marker_id' );
	for ( var i in names )
		element.removeCustomData( i );
	element.removeCustomData( 'list_marker_names' );
	if ( removeFromDatabase )
	{
		element.removeCustomData( 'list_marker_id' );
		delete database[id];
	}
};

CKEDITOR.tools.extend( CKEDITOR.dom.element.prototype,
	/** @lends CKEDITOR.dom.element.prototype */
	{
		/**
		 * The node type. This is a constant value set to
		 * {@link CKEDITOR.NODE_ELEMENT}.
		 * @type Number
		 * @example
		 */
		type : CKEDITOR.NODE_ELEMENT,

		/**
		 * Adds a CSS class to the element. It appends the class to the
		 * already existing names.
		 * @param {String} className The name of the class to be added.
		 * @example
		 * var element = new CKEDITOR.dom.element( 'div' );
		 * element.addClass( 'classA' );  // &lt;div class="classA"&gt;
		 * element.addClass( 'classB' );  // &lt;div class="classA classB"&gt;
		 * element.addClass( 'classA' );  // &lt;div class="classA classB"&gt;
		 */
		addClass : function( className )
		{
			var c = this.$.className;
			if ( c )
			{
				var regex = new RegExp( '(?:^|\\s)' + className + '(?:\\s|$)', '' );
				if ( !regex.test( c ) )
					c += ' ' + className;
			}
			this.$.className = c || className;
		},

		/**
		 * Removes a CSS class name from the elements classes. Other classes
		 * remain untouched.
		 * @param {String} className The name of the class to remove.
		 * @example
		 * var element = new CKEDITOR.dom.element( 'div' );
		 * element.addClass( 'classA' );  // &lt;div class="classA"&gt;
		 * element.addClass( 'classB' );  // &lt;div class="classA classB"&gt;
		 * element.removeClass( 'classA' );  // &lt;div class="classB"&gt;
		 * element.removeClass( 'classB' );  // &lt;div&gt;
		 */
		removeClass : function( className )
		{
			var c = this.getAttribute( 'class' );
			if ( c )
			{
				var regex = new RegExp( '(?:^|\\s+)' + className + '(?=\\s|$)', 'i' );
				if ( regex.test( c ) )
				{
					c = c.replace( regex, '' ).replace( /^\s+/, '' );

					if ( c )
						this.setAttribute( 'class', c );
					else
						this.removeAttribute( 'class' );
				}
			}
		},

		hasClass : function( className )
		{
			var regex = new RegExp( '(?:^|\\s+)' + className + '(?=\\s|$)', '' );
			return regex.test( this.getAttribute('class') );
		},

		/**
		 * Append a node as a child of this element.
		 * @param {CKEDITOR.dom.node|String} node The node or element name to be
		 *		appended.
		 * @param {Boolean} [toStart] Indicates that the element is to be
		 *		appended at the start.
		 * @returns {CKEDITOR.dom.node} The appended node.
		 * @example
		 * var p = new CKEDITOR.dom.element( 'p' );
		 *
		 * var strong = new CKEDITOR.dom.element( 'strong' );
		 * <b>p.append( strong );</b>
		 *
		 * var em = <b>p.append( 'em' );</b>
		 *
		 * // result: "&lt;p&gt;&lt;strong&gt;&lt;/strong&gt;&lt;em&gt;&lt;/em&gt;&lt;/p&gt;"
		 */
		append : function( node, toStart )
		{
			if ( typeof node == 'string' )
				node = this.getDocument().createElement( node );

			if ( toStart )
				this.$.insertBefore( node.$, this.$.firstChild );
			else
				this.$.appendChild( node.$ );

			return node;
		},

		appendHtml : function( html )
		{
			if ( !this.$.childNodes.length )
				this.setHtml( html );
			else
			{
				var temp = new CKEDITOR.dom.element( 'div', this.getDocument() );
				temp.setHtml( html );
				temp.moveChildren( this );
			}
		},

		/**
		 * Append text to this element.
		 * @param {String} text The text to be appended.
		 * @returns {CKEDITOR.dom.node} The appended node.
		 * @example
		 * var p = new CKEDITOR.dom.element( 'p' );
		 * p.appendText( 'This is' );
		 * p.appendText( ' some text' );
		 *
		 * // result: "&lt;p&gt;This is some text&lt;/p&gt;"
		 */
		appendText : function( text )
		{
			if ( this.$.text != undefined )
				this.$.text += text;
			else
				this.append( new CKEDITOR.dom.text( text ) );
		},

		appendBogus : function()
		{
			var lastChild = this.getLast() ;

			// Ignore empty/spaces text.
			while ( lastChild && lastChild.type == CKEDITOR.NODE_TEXT && !CKEDITOR.tools.rtrim( lastChild.getText() ) )
				lastChild = lastChild.getPrevious();
			if ( !lastChild || !lastChild.is || !lastChild.is( 'br' ) )
			{
				this.append(
					CKEDITOR.env.opera ?
						this.getDocument().createText('') :
						this.getDocument().createElement( 'br' ) );
			}
		},

		/**
		 * Breaks one of the ancestor element in the element position, moving
		 * this element between the broken parts.
		 * @param {CKEDITOR.dom.element} parent The anscestor element to get broken.
		 * @example
		 * // Before breaking:
		 * //     &lt;b&gt;This &lt;i&gt;is some&lt;span /&gt; sample&lt;/i&gt; test text&lt;/b&gt;
		 * // If "element" is &lt;span /&gt; and "parent" is &lt;i&gt;:
		 * //     &lt;b&gt;This &lt;i&gt;is some&lt;/i&gt;&lt;span /&gt;&lt;i&gt; sample&lt;/i&gt; test text&lt;/b&gt;
		 * element.breakParent( parent );
		 * @example
		 * // Before breaking:
		 * //     &lt;b&gt;This &lt;i&gt;is some&lt;span /&gt; sample&lt;/i&gt; test text&lt;/b&gt;
		 * // If "element" is &lt;span /&gt; and "parent" is &lt;b&gt;:
		 * //     &lt;b&gt;This &lt;i&gt;is some&lt;/i&gt;&lt;/b&gt;&lt;span /&gt;&lt;b&gt;&lt;i&gt; sample&lt;/i&gt; test text&lt;/b&gt;
		 * element.breakParent( parent );
		 */
		breakParent : function( parent )
		{
			var range = new CKEDITOR.dom.range( this.getDocument() );

			// We'll be extracting part of this element, so let's use our
			// range to get the correct piece.
			range.setStartAfter( this );
			range.setEndAfter( parent );

			// Extract it.
			var docFrag = range.extractContents();

			// Move the element outside the broken element.
			range.insertNode( this.remove() );

			// Re-insert the extracted piece after the element.
			docFrag.insertAfterNode( this );
		},

		contains :
			CKEDITOR.env.ie || CKEDITOR.env.webkit ?
				function( node )
				{
					var $ = this.$;

					return node.type != CKEDITOR.NODE_ELEMENT ?
						$.contains( node.getParent().$ ) :
						$ != node.$ && $.contains( node.$ );
				}
			:
				function( node )
				{
					return !!( this.$.compareDocumentPosition( node.$ ) & 16 );
				},

		/**
		 * Moves the selection focus to this element.
		 * @example
		 * var element = CKEDITOR.document.getById( 'myTextarea' );
		 * <b>element.focus()</b>;
		 */
		focus : function()
		{
			// IE throws error if the element is not visible.
			try
			{
				this.$.focus();
			}
			catch (e)
			{}
		},

		/**
		 * Gets the inner HTML of this element.
		 * @returns {String} The inner HTML of this element.
		 * @example
		 * var element = CKEDITOR.dom.element.createFromHtml( '&lt;div&gt;&lt;b&gt;Example&lt;/b&gt;&lt;/div&gt;' );
		 * alert( <b>p.getHtml()</b> );  // "&lt;b&gt;Example&lt;/b&gt;"
		 */
		getHtml : function()
		{
			var retval = this.$.innerHTML;
			// Strip <?xml:namespace> tags in IE. (#3341).
			return CKEDITOR.env.ie ? retval.replace( /<\?[^>]*>/g, '' ) : retval;
		},

		getOuterHtml : function()
		{
			if ( this.$.outerHTML )
			{
				// IE includes the <?xml:namespace> tag in the outerHTML of
				// namespaced element. So, we must strip it here. (#3341)
				return this.$.outerHTML.replace( /<\?[^>]*>/, '' );
			}

			var tmpDiv = this.$.ownerDocument.createElement( 'div' );
			tmpDiv.appendChild( this.$.cloneNode( true ) );
			return tmpDiv.innerHTML;
		},

		/**
		 * Sets the inner HTML of this element.
		 * @param {String} html The HTML to be set for this element.
		 * @returns {String} The inserted HTML.
		 * @example
		 * var p = new CKEDITOR.dom.element( 'p' );
		 * <b>p.setHtml( '&lt;b&gt;Inner&lt;/b&gt; HTML' );</b>
		 *
		 * // result: "&lt;p&gt;&lt;b&gt;Inner&lt;/b&gt; HTML&lt;/p&gt;"
		 */
		setHtml : function( html )
		{
			return ( this.$.innerHTML = html );
		},

		/**
		 * Sets the element contents as plain text.
		 * @param {String} text The text to be set.
		 * @returns {String} The inserted text.
		 * @example
		 * var element = new CKEDITOR.dom.element( 'div' );
		 * element.setText( 'A > B & C < D' );
		 * alert( element.innerHTML );  // "A &amp;gt; B &amp;amp; C &amp;lt; D"
		 */
		setText : function( text )
		{
			CKEDITOR.dom.element.prototype.setText = ( this.$.innerText != undefined ) ?
				function ( text )
				{
					return this.$.innerText = text;
				} :
				function ( text )
				{
					return this.$.textContent = text;
				};

			return this.setText( text );
		},

		/**
		 * Gets the value of an element attribute.
		 * @function
		 * @param {String} name The attribute name.
		 * @returns {String} The attribute value or null if not defined.
		 * @example
		 * var element = CKEDITOR.dom.element.createFromHtml( '&lt;input type="text" /&gt;' );
		 * alert( <b>element.getAttribute( 'type' )</b> );  // "text"
		 */
		getAttribute : (function()
		{
			var standard = function( name )
			{
				return this.$.getAttribute( name, 2 );
			};

			if ( CKEDITOR.env.ie && ( CKEDITOR.env.ie7Compat || CKEDITOR.env.ie6Compat ) )
			{
				return function( name )
				{
					switch ( name )
					{
						case 'class':
							name = 'className';
							break;

						case 'tabindex':
							var tabIndex = standard.call( this, name );

							// IE returns tabIndex=0 by default for all
							// elements. For those elements,
							// getAtrribute( 'tabindex', 2 ) returns 32768
							// instead. So, we must make this check to give a
							// uniform result among all browsers.
							if ( tabIndex !== 0 && this.$.tabIndex === 0 )
								tabIndex = null;

							return tabIndex;
							break;

						case 'checked':
						{
							var attr = this.$.attributes.getNamedItem( name ),
								attrValue = attr.specified ? attr.nodeValue     // For value given by parser.
															 : this.$.checked;  // For value created via DOM interface.

							return attrValue ? 'checked' : null;
						}

						case 'hspace':
							return this.$.hspace;

						case 'style':
							// IE does not return inline styles via getAttribute(). See #2947.
							return this.$.style.cssText;
					}

					return standard.call( this, name );
				};
			}
			else
				return standard;
		})(),

		getChildren : function()
		{
			return new CKEDITOR.dom.nodeList( this.$.childNodes );
		},

		/**
		 * Gets the current computed value of one of the element CSS style
		 * properties.
		 * @function
		 * @param {String} propertyName The style property name.
		 * @returns {String} The property value.
		 * @example
		 * var element = new CKEDITOR.dom.element( 'span' );
		 * alert( <b>element.getComputedStyle( 'display' )</b> );  // "inline"
		 */
		getComputedStyle :
			CKEDITOR.env.ie ?
				function( propertyName )
				{
					return this.$.currentStyle[ CKEDITOR.tools.cssStyleToDomStyle( propertyName ) ];
				}
			:
				function( propertyName )
				{
					return this.getWindow().$.getComputedStyle( this.$, '' ).getPropertyValue( propertyName );
				},

		/**
		 * Gets the DTD entries for this element.
		 * @returns {Object} An object containing the list of elements accepted
		 *		by this element.
		 */
		getDtd : function()
		{
			var dtd = CKEDITOR.dtd[ this.getName() ];

			this.getDtd = function()
			{
				return dtd;
			};

			return dtd;
		},

		getElementsByTag : CKEDITOR.dom.document.prototype.getElementsByTag,

		/**
		 * Gets the computed tabindex for this element.
		 * @function
		 * @returns {Number} The tabindex value.
		 * @example
		 * var element = CKEDITOR.document.getById( 'myDiv' );
		 * alert( <b>element.getTabIndex()</b> );  // e.g. "-1"
		 */
		getTabIndex :
			CKEDITOR.env.ie ?
				function()
				{
					var tabIndex = this.$.tabIndex;

					// IE returns tabIndex=0 by default for all elements. In
					// those cases we must check that the element really has
					// the tabindex attribute set to zero, or it is one of
					// those element that should have zero by default.
					if ( tabIndex === 0 && !CKEDITOR.dtd.$tabIndex[ this.getName() ] && parseInt( this.getAttribute( 'tabindex' ), 10 ) !== 0 )
						tabIndex = -1;

						return tabIndex;
				}
			: CKEDITOR.env.webkit ?
				function()
				{
					var tabIndex = this.$.tabIndex;

					// Safari returns "undefined" for elements that should not
					// have tabindex (like a div). So, we must try to get it
					// from the attribute.
					// https://bugs.webkit.org/show_bug.cgi?id=20596
					if ( tabIndex == undefined )
					{
			