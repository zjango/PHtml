# PHtml
========

# Installation
To install the package, simply add the following to your Laravel installation's `composer.json` file

```json
"require": {
	"laravel/framework": "5.*",
	"zjango/phtml": "dev-master"  
},
```

Run the usual `composer update` to pull the files.  Then, add the following **Service Provider** to your `providers` array in your `config/app.php` config.

```php
'providers' => array(
	...
	'Zjango\Phtml\PhtmlServiceProvider',
);
```

And finally add a new line to the aliases array:

```php
		'Phtml'	=>	'Zjango\Phtml\Facades\Phtml',
```

# Usage

```php
		$html=Phtml::init('http://www.apple.com');
```

```php
		$as = $html->find('a');
```

```php
		$a = $html->find('a',0);
```

```php
		$a = $html->find('a',-1);
```

```php
		$a = $html->find('a',0);
		$href = $a->href();
		$text = $a->text();
```

