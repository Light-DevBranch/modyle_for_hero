<?php
namespace Drupal\dlog_hero\Plugin\DlogHero\Path;

use Drupal\dlog_hero\Plugin\DlogHero\DlogHeroPluginInterface;

/**
 * Interface for DlogHero path plugin type.
 */

Interface DlogHeroPathPluginInterface extends DlogHeroPluginInterface{

  /**
   * Gets plugin paths.
   * @return array
   * An array with paths.
   */
  public function getMathPath();

  /**
   * Gets match type.
   * @return array
   * The match type.
   */
  public function getMatchType();
}
