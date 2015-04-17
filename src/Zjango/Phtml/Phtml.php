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
		$pattern='/^((http|https):\/\/)?[\w-_.]+(\/[\w-_]+)*\/?$/';
		if (strlen($html)<=400&&preg_match($pattern, $html)){
	    	App::register('\Zjango\Laracurl\LaracurlServiceProvider');
			$html=\Zjango\Laracurl\Facades\Laracurl::get($html)->body;
		}
		$sClassName = 'Zjango\Phtml\Parser'.$sType;
		return new $sClassName($html);
	}
}