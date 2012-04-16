<?php 
/**
 * @package sym_backbonejs
 * @author thomas appel <mail@thomas-appel.com>

 * Displays <a href="http://opensource.org/licenses/gpl-3.0.html">GNU Public License</a>
 * @license http://opensource.org/licenses/gpl-3.0.html GNU Public License
 */ 
Class extension_sym_backbonejs extends Extension {

	public function about() {
		return array(
			'name' => 'backbone js',
			'type'	=> 'script',
			'version' => '1.2',
			'release-date' => '2012-04-17',
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

	public function __construct(Array $args) {
		parent::__construct($args);

		$reqirepath = EXTENSION . '/requirejs/assets/requirejs/require.js';

		if(!is_file($path)) {
			//throw new SymphonyErrorPage(__('Please make sure extension requirejs is loaded properly and its submodules are loaded as well. Try <code>git submodule add git://github/iwyg/requirejs extensions/requirejs --recursive</code> from within the symphony root path'));
		}
	}
}
