<?php
namespace Drupal\dlog_hero\Plugin\DlogHero\Entity;

use Drupal\Core\Entity\EntityInterface;
use Drupal\dlog_hero\Plugin\DlogHero\DlogHeroPluginInterface;

/**
 * Interface for DlogHero entity plugin type.
 */

interface DlogHeroEntityPluginInterface extends DlogHeroPluginInterface {

  /**
   * Gets Entity ID.
   * @return string
   * The entity type ID.
   */
  public function getEntityType();

  /**
   * Get entity bundles.
   * @return array
   * An array with entity types bundles.
   */
  public function getEntityBundle();

  /**
   * Get current entity ID.
   * @return EntityInterface;
   * The current ID.
   */
  public function getCurrentEntity();

}
