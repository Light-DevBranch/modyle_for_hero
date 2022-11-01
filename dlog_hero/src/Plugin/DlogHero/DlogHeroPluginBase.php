<?php

namespace Drupal\dlog_hero\Plugin\DlogHero;

use Composer\DependencyResolver\Request;
use Drupal\Component\Plugin\PluginBase;
use Drupal\Core\Http\RequestStack;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

abstract class DlogHeroPluginBase extends PluginBase implements DlogHeroPluginInterface, ContainerFactoryPluginInterface
{
  public $requestStack;
  public function __construct(array $configuration, $plugin_id, $plugin_definition,)
  {
    parent::__construct($configuration, $plugin_id, $plugin_definition);

  }

  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition): DlogHeroPluginBase
  {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('')
  );
  }

}
