<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.0ymjLr.' shared service.

return $this->privates['.service_locator.0ymjLr.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'repo' => ['privates', 'App\\Repository\\QuestionsRepository', 'getQuestionsRepositoryService.php', true],
], [
    'repo' => 'App\\Repository\\QuestionsRepository',
]);
