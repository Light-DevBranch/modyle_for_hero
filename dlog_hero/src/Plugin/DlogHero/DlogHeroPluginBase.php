<?php

namespace Drupal\dlog_hero\Plugin\DlogHero;

use Drupal\Component\Plugin\PluginBase;
use Drupal\Core\Controller\TitleResolverInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Routing\CurrentRouteMatch;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * DlogHero plugin base.
 * @method pluginDefinition(string $string)
 */
abstract class DlogHeroPluginBase extends PluginBase implements DlogHeroPluginInterface, ContainerFactoryPluginInterface
{
  /**
   * @var Request
   * The current request.
   */
  protected Request $request;
  /**
   * @var CurrentRouteMatch
   * The current route Match.
   */
  protected CurrentRouteMatch $routeMatch;
  /**
   * @var array|string|null
   * The current page title.
   */
  protected $pageTitle;

  /**
   * @var EntityTypeManagerInterface
   * The entity type manager.
   */
  protected EntityTypeManagerInterface $entityTypeManager;

  /**
   * @param array $configuration
   * The configuration.
   * @param $plugin_id
   * The plugin ID.
   * @param $plugin_definition
   * The plugin definition.
   * @param Request $request
   * The current request.
   * @param CurrentRouteMatch $currentRouteMatch
   * The current route match.
   * @param TitleResolverInterface $titleResolver
   * The title resolver.
   * @param EntityTypeManagerInterface $entityTypeManager
   * The entity type manager.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, Request $request, CurrentRouteMatch $currentRouteMatch, TitleResolverInterface $titleResolver, EntityTypeManagerInterface $entityTypeManager)
  {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->request = $request;
    $this->routeMatch = $currentRouteMatch;
    $this->pageTitle = $titleResolver->getTitle($this->request, $this->routeMatch->getRouteObject());
    $this->entityTypeManager = $entityTypeManager;


  }

  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition): DlogHeroPluginBase
  {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('request_stack')->getCurrentRequest(),
      $container->get('current_route_match'),
      $container->get('title_resolver'),
      $container->get('entity_type.manager')
    );
  }


  /** Gets current request.
   * @return Request
   * The current request.
   */
  public function getRequest(): Request
  {
    return $this->request;
  }

  /** Gets current route match.
   * @return CurrentRouteMatch
   * The current route match.
   */
  public function getRouteMatch(): CurrentRouteMatch
  {
    return $this->routeMatch;
  }

  /** Gets current page title.
   * @return array|string|null
   * The page title.
   */
  public function getPageTitle()
  {
    return $this->pageTitle;
  }

  /** Gets entity manager.
   * @return EntityTypeManagerInterface
   * The entity manager.
   */
  public function getEntityManager(): EntityTypeManagerInterface
  {
    return $this->entityTypeManager;
  }

  /**
   * {@inheritDoc}
   */
  public function getEnabled()
  {
    $this->pluginDefinition('enabled');
  }

  /**
   * {@inheritDoc}
   */
  public function getWeight(): int
  {
    return $this->pluginDefinition('weight');
  }

  /**
   * {@inheritDoc}
   */
  public function getHeroTitle()
  {
    return $this->getPageTitle();
  }

  /**
   * {@inheritDoc}
   */
  public function getHeroSubTitle()
  {
    return NULL;
  }

  /**
   * {@inheritDoc}
   */
  public function getHeroImage()
  {
    return NULL;
  }

  /**
   * {@inheritDoc}
   */
  public function getHeroVideo(): array
  {
    return [];
  }

}
