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


/**
 * Run in a custom namespace, so the class can be replaced
 */

namespace medienworx;

class ModuleMwkChangeContrast extends \Module
{
	/**
	 * @var string
	 */
	protected $strTemplate = 'mod_mwk_change_contrast';


	protected function compile()
	{
		$jsContrast = 'mwk'.$this->id.'2';

		$changeContrastButton = '<button id="contrast-'.$jsContrast.'" type="button" class="btn '.$this->change_contrast_button_color.' '.$this->change_contrast_button_size.'">'.$this->change_contrast_button_label.'</button>';

		$changeContrastButtonReset = '<button id="reset-'.$jsContrast.'" type="button" class="btn '.$this->change_contrast_button_color_reset.' '.$this->change_contrast_button_size_reset.'">'.$this->change_contrast_button_label_reset.'</button>';




		$this->Template->jsContrast = $jsContrast;
		$this->Template->changeContrastButton = $changeContrastButton;
		$this->Template->changeContrastButtonReset = $changeContrastButtonReset;

		$this->Template->changeContrastHtmlTags = $this->change_contrast_html_tags;
		$this->Template->changeContrastFontColor = $this->change_contrast_font_color;
		$this->Template->changeContrastBackgroundColor = $this->change_contrast_background_color;

		// load css and javascript
		if(TL_MODE == 'FE')
		{
			\MwkCoreHelper::insertScriptToGlobals('/system/modules/mwk-change-contrast/assets/jquery/1.11.2/jquery.min.js');
			\MwkCoreHelper::insertScriptToGlobals('/system/modules/mwk-change-contrast/assets/bootstrap/js/bootstrap.min.js');
			\MwkCoreHelper::insertScriptToGlobals('/system/modules/mwk-change-contrast/assets/bootstrap/css/bootstrap.min.css');
			\MwkCoreHelper::insertScriptToGlobals('/system/modules/mwk-change-contrast/assets/js-cookie/js.cookie.js');
			\MwkCoreHelper::insertScriptToGlobals('/system/modules/mwk-change-contrast/assets/font-awesome/css/font-awesome.min.css');
		}
	}
}
