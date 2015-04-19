<?php namespace Zjango\Phtml;

use App;
class Phtml {

	const TYPE_DOM = 'Dom';
	const TYPE_TIDY = 'Tidy';

	/**
	 * @param        $html
	 * @param string $sType must be Dom or Tidy
	 * @return ParserInterface
	 */

	public static function init($html, $sType = 'Dom') {
		$pattern='/^(([a-zA-Z]+)(:\/\/))?([a-zA-Z]+)\.(\w+)\.([\w.]+)(\/([\w]+)\/?)*(\/[a-zA-Z0-9]+\.(\w+))*(\/([\w]+)\/?)*(\?(\w+=?[\w]*))*((&?\w+=?[\w]*))*$/';
		if (strlen($html)<=400&&preg_match($pattern, $html)){
	    	App::register('\Zjango\Laracurl\LaracurlServiceProvider');
			$html=\Zjango\Laracurl\Facades\Laracurl::get($html)->body;
		}
		$sClassName = 'Zjango\Phtml\Parser'.$sType;
		return new $sClassName($html);
	}
}