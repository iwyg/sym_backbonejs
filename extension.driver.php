<?php 

Class extension_sym_backbonejs extends Extension 
{

	public function about() 
	{
		return array(
			'name' => 'backbone js',
			'type'	=> 'script',
			'version' => '1',
			'release-date' => '2012-02-02',
			'author' => array(
				'name' => 'Thomas Appel',
				'email' => 'mail@thomas-appel.com',
				'website' => 'http://thomas-appel.com'
			),
			'description' => 'load backbone js library for your backend applications',
			'compatibility' => array(
				'2.2' => true
			)
		);
	}

	public function __construct(Array $args) 
	{
		parent::__construct($args);

		$reqirepath = EXTENSION . '/requirejs/assets/requirejs/require.js';

		if(!is_file($path)) {
			//throw new SymphonyErrorPage(__('Please make sure extension requirejs is loaded properly and its submodules are loaded as well. Try <code>git submodule add git://github/iwyg/requirejs extensions/requirejs --recursive</code> from within the symphony root path'));
		}
	}
}
?>

