<?php namespace Zjango\Phtml\Facades;

use Illuminate\Support\Facades\Facade;

class Phtml extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'phtml'; }
}