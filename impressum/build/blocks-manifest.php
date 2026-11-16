<?php
// This file is generated. Do not modify it manually.
return array(
	'imprint' => array(
		'$schema' => 'https://schemas.wp.org/wp/6.9/block.json',
		'apiVersion' => 3,
		'name' => 'impressum/imprint',
		'title' => 'Imprint',
		'category' => 'common',
		'description' => 'Output any fields of your imprint.',
		'keywords' => array(
			'legal',
			'information'
		),
		'textdomain' => 'impressum',
		'attributes' => array(
			'anchor' => array(
				'type' => 'string'
			),
			'enabledFields' => array(
				'default' => array(
					'all'
				),
				'type' => 'array'
			)
		),
		'styles' => array(
			array(
				'name' => 'default',
				'label' => 'Default',
				'isDefault' => true
			),
			array(
				'name' => 'no-title',
				'label' => 'Without Titles'
			)
		),
		'supports' => array(
			'__experimentalBorder' => array(
				'color' => true,
				'radius' => true,
				'style' => true,
				'width' => true
			),
			'anchor' => true,
			'color' => array(
				'link' => true,
				'__experimentalDefaultControls' => array(
					'background' => true,
					'text' => true
				)
			),
			'html' => false,
			'spacing' => array(
				'margin' => true,
				'padding' => true
			),
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'textAlign' => true,
				'__experimentalFontFamily' => true,
				'__experimentalFontStyle' => true,
				'__experimentalFontWeight' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalTextTransform' => true,
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			)
		),
		'editorScript' => 'file:./index.js',
		'editorStyle' => array(
			'file:./index.css'
		)
	)
);
