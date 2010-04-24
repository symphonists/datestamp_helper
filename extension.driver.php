<?php

	class extension_datestamp_helper extends Extension {

		public function about(){
			return array(
				'name' => 'Datestamp Helper',
				'version' => '1.1',
				'release-date' => '2010-04-24',
				'author' => array(
					'name' => 'Rainer Borene',
					'website' => 'http://rainerborene.com/',
					'email' => 'me@rainerborene.com'
				)
			);		
		}

		public function getSubscribedDelegates(){
			return array(
				array(
					'page' => '/frontend/',
					'delegate' => 'FrontendOutputPreGenerate',
					'callback' => 'FrontendOutputPreGenerate'					
				)
			);
		}

		public function FrontendOutputPreGenerate($context){
			Frontend::instance()->Page()->registerPHPFunction('mtime');
		}

	}

	// ---------------------------------------------------------------- //

	function mtime($path){
		$mtime = filemtime(WORKSPACE . '/' . $path);
		return URL . '/workspace/' . $path . "?cache={$mtime}";
	}