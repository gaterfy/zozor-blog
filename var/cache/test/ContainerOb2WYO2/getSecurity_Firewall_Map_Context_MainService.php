<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.main' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/Security/FirewallContext.php';

return $this->privates['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    yield 0 => ($this->privates['security.channel_listener'] ?? $this->load('getSecurity_ChannelListenerService.php'));
    yield 1 => ($this->privates['security.context_listener.0'] ?? $this->load('getSecurity_ContextListener_0Service.php'));
    yield 2 => ($this->privates['security.authentication.listener.form.main'] ?? $this->load('getSecurity_Authentication_Listener_Form_MainService.php'));
    yield 3 => ($this->privates['security.authentication.listener.basic.main'] ?? $this->load('getSecurity_Authentication_Listener_Basic_MainService.php'));
    yield 4 => ($this->privates['security.authentication.listener.anonymous.main'] ?? $this->load('getSecurity_Authentication_Listener_Anonymous_MainService.php'));
    yield 5 => ($this->privates['security.access_listener'] ?? $this->load('getSecurity_AccessListenerService.php'));
}, 6), ($this->privates['security.exception_listener.main'] ?? $this->load('getSecurity_ExceptionListener_MainService.php')), ($this->privates['security.logout_listener.main'] ?? $this->load('getSecurity_LogoutListener_MainService.php')), ($this->privates['security.firewall.map.config.main'] ?? $this->load('getSecurity_Firewall_Map_Config_MainService.php')));