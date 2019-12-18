<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache.global_clearer' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';
include_once $this->targetDirs[3].'/vendor/psr/cache/src/CacheItemPoolInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/AdapterInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache-contracts/CacheInterface.php';
include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/ResettableInterface.php';
include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/ArrayTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/ArrayAdapter.php';

return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->load('getCache_AppService.php')), 'cache.system' => ($this->services['cache.system'] ?? $this->load('getCache_SystemService.php')), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->load('getCache_AnnotationsService.php')), 'cache.doctrine.orm.default.metadata' => ($this->privates['cache.doctrine.orm.default.metadata'] ?? ($this->privates['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())), 'cache.doctrine.orm.default.result' => ($this->privates['cache.doctrine.orm.default.result'] ?? ($this->privates['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())), 'cache.doctrine.orm.default.query' => ($this->privates['cache.doctrine.orm.default.query'] ?? ($this->privates['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->load('getCache_SecurityExpressionLanguageService.php')), 'cache.webpack_encore' => ($this->privates['cache.webpack_encore'] ?? $this->load('getCache_WebpackEncoreService.php'))]);
