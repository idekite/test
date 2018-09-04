<?php

/**
 * @Author: Kutu
 * @Date:   2018-09-04 10:03:28
 * @Last Modified by:   Kutu
 * @Last Modified time: 2018-09-04 10:04:26
 */
namespace idekite\test;

use Illuminate\Support\ServiceProvider;

class testServiceProvider extends ServiceProvider {
    protected $defer = true;

	public function boot() {

		$this->publishes([
			__DIR__.'/../config/test.php' => config_path('test.php'),
		], 'test');
	}

    public function register() {
		$this->mergeConfigFrom( __DIR__.'/../config/test.php', 'test');
    }

    public function provides() {
        return ['test'];
    }
}