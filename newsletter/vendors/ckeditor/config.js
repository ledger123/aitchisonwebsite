/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	toolbar: [
		// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
		{ name: 'document', items: [ 'Source', '-', 'Save', 'DocProps','Preview','Print' ] },	
		// Defines toolbar group without name.
		[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],	
		{ name: 'forms', items : [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton',
				'HiddenField' ] },		
		'/',	// Line break - next group will be placed in new line.
		{ name: 'basicstyles', items: [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
		{ name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
		{ name: 'colors', items : [ 'TextColor','BGColor' ] },
		{ name: 'tools', items : [ 'Maximize', 'ShowBlocks','-','About' ] }
	]
	config.allowedContent = true;
	config.extraAllowedContent = '*(*)';
};
