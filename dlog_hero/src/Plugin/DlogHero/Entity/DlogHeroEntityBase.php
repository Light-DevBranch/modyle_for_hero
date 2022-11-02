<?php

namespace Drupal\dlog_hero\Plugin\DlogHero\Path;

use Drupal\dlog_hero\Plugin\DlogHero\DlogHeroPluginBase;
use Drupal\dlog_hero\Plugin\DlogHero\Entity\DlogHeroEntityPluginInterface;

/**
 * The base for DlogHero path plugin type.
 */
abstract class DlogHeroEntityBase extends DlogHeroPluginBase implements DlogHeroEntityPluginInterface
{

  /**
   * {@inheritDoc}
   */

  public function getEntityType(){
    return $this->pluginDefinition('entity_type');
  }

  /**
   * {@inheritDoc}
   */

  public function getEntityBundle(){
    return $this->pluginDefinition('entity_bundle');
  }

  /**
   * {@inheritDoc}
   */
  public function getCurrentEntity(){
    return $this->pluginDefinition('node');
  }

}
