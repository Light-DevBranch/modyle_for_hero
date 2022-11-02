<?php

namespace Drupal\dlog_hero\Plugin\DlogHero\Path;

use Drupal\dlog_hero\Plugin\DlogHero\DlogHeroPluginBase;

/**
 * The base for DlogHero path plugin type.
 */
abstract class DlogHeroPathBase extends DlogHeroPluginBase implements DlogHeroPathPluginInterface
{

  /**
   * {@inheritDoc}
   */
  public function getMathPath()
  {
    return $this->pluginDefinition('match_path');
  }

  /**
   * {@inheritDoc}
   */
  public function getMatchType()
  {
    return $this->pluginDefinition('match_type');
  }

}
