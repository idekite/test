<?php
namespace idekite\test;
use \Illuminate\Support\Facades\Facade;

class testFacade extends Facade {
    protected static function getFacadeAccessor() {
        return 'test';
    }
}