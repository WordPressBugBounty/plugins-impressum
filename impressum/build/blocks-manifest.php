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
			'html' => false
		),
		'editorScript' => 'file:./index.js',
		'editorStyle' => array(
			'file:./index.css'
		)
	)
);
