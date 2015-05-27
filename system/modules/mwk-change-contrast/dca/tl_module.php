<?php
 
 /**
 * Contao Open Source CMS
 *
 * Copyright (c) 2015 - 2015 Agentur medienworx
 *
 * @package     mwk-font-resizer
 * @author      Christian Kienzl <christian.kienzl@medienworx.eu>
 * @author      Peter Ongyert <peter.ongyert@medienworx.eu>
 * @link        http://www.medienworx.eu
 * @license     http://medienworx.eu/agb.html Commercial license
 */

$GLOBALS['TL_DCA']['tl_module']['palettes']['mwk_change_contrast'] = '
    {title_legend},
        name,
        type;

	{change_contrast_button},
		change_contrast_button_label,
		change_contrast_button_color,
		change_contrast_button_size;

	{change_contrast_reset},
		change_contrast_button_label_reset,
		change_contrast_button_color_reset,
		change_contrast_button_size_reset;

	{change_contrast_configuration},
		change_contrast_html_tags,
		change_contrast_font_color,
		change_contrast_background_color;

    {protected_legend:hide},
        protected;

    {expert_legend:hide},
        guests,
        cssID,
        space
    ';

$GLOBALS['TL_DCA']['tl_module']['fields']['change_contrast_button_label'] =
	array
	(
		'label'                 => &$GLOBALS['TL_LANG']['tl_module']['change_contrast_button_label'],
		'inputType'             => 'text',
		'eval'                  => array('tl_class'=>'w50'),
		'sql'                   => "varchar(255) NOT NULL default 'Kontrast'"
	);

$GLOBALS['TL_DCA']['tl_module']['fields']['change_contrast_button_color'] =
	array
	(
		'label'     			=> &$GLOBALS['TL_LANG']['tl_module']['change_contrast_button_color'],
		'exclude'   			=> true,
		'inputType' 			=> 'select',
		'options'   			=> array
		(
			'btn-default',
			'btn-primary',
			'btn-success',
			'btn-info',
			'btn-warning',
			'btn-danger',
			'btn-link',
			'btn-custom'
		),
		'eval'      => array
		(
			'maxlength'=>200,
			'includeBlankOption'=>true,
			'mandatory' => true,
			'tl_class'=>'w50'
		),
		'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['change_contrast_button_size'] = array
(
	'label'     				=> &$GLOBALS['TL_LANG']['tl_module']['change_contrast_button_size'],
	'exclude'   				=> true,
	'inputType' 				=> 'select',
	'options'   				=> array
	(
		'btn-lg',
		'btn-sm',
		'btn-xs'
	),
	'eval'      => array
	(
		'maxlength'=>200,
		'includeBlankOption'=>true,
		'tl_class'=>'w50'
	),
	'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['change_contrast_button_label_reset'] =
	array
	(
		'label'                 => &$GLOBALS['TL_LANG']['tl_module']['change_contrast_button_label_reset'],
		'inputType'             => 'text',
		'eval'                  => array('tl_class'=>'w50'),
		'sql'                   => "varchar(255) NOT NULL default 'Normal'"
	);

$GLOBALS['TL_DCA']['tl_module']['fields']['change_contrast_button_color_reset'] =
	array
	(
		'label'     			=> &$GLOBALS['TL_LANG']['tl_module']['change_contrast_button_color_reset'],
		'exclude'   			=> true,
		'inputType' 			=> 'select',
		'options'   			=> array
		(
			'btn-default',
			'btn-primary',
			'btn-success',
			'btn-info',
			'btn-warning',
			'btn-danger',
			'btn-link',
			'btn-custom'
		),
		'eval'      => array
		(
			'maxlength'=>200,
			'includeBlankOption'=>true,
			'mandatory' => true,
			'tl_class'=>'w50'
		),
		'sql'       => "varchar(255) NOT NULL default ''"
	);

$GLOBALS['TL_DCA']['tl_module']['fields']['change_contrast_button_size_reset'] = array
(
	'label'     				=> &$GLOBALS['TL_LANG']['tl_module']['change_contrast_button_size_reset'],
	'exclude'   				=> true,
	'inputType' 				=> 'select',
	'options'   				=> array
	(
		'btn-lg',
		'btn-sm',
		'btn-xs'
	),
	'eval'      => array
	(
		'maxlength'=>200,
		'includeBlankOption'=>true,
		'tl_class'=>'w50'
	),
	'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['change_contrast_html_tags'] =
	array
	(
		'label'                 => &$GLOBALS['TL_LANG']['tl_module']['change_contrast_html_tags'],
		'inputType'             => 'text',
		'eval'                  => array('tl_class'=>'long'),
		'sql'                   => "varchar(255) NOT NULL default 'body'"
	);

$GLOBALS['TL_DCA']['tl_module']['fields']['change_contrast_font_color'] =
    array
    (
        'label'                 => &$GLOBALS['TL_LANG']['tl_module']['change_contrast_font_color'],
        'inputType'             => 'text',
        'eval'                  => array('tl_class'=>'w50'),
        'sql'                   => "varchar(255) NOT NULL default ''"
    );

$GLOBALS['TL_DCA']['tl_module']['fields']['change_contrast_background_color'] =
    array
    (
        'label'                 => &$GLOBALS['TL_LANG']['tl_module']['change_contrast_background_color'],
        'inputType'             => 'text',
        'eval'                  => array
		(
			'rgxp'				=> 'extnd',
			'tl_class'			=> 'w50'
		),
        'sql'                   => "varchar(255) NOT NULL default ''"
    );




