<?php

namespace Drupal\dlog_hero\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * DlogHeroEntity annotation.
 *
 * @annotation
 */
class DlogHeroEntity extends Plugin
{
  /**
   * The plugin ID.
   * @var string
   */

  public $id;
  /** Allow for plugins enable or disable.
   * Default value TRUE. You can set value it to FALSE, to temporarily disable plugin.
   * @var bool;
   */
  public $enabled;
  /**
   * Entity type id.
   * @var string
   */
  public $entity_type;

  /**
   * The entity bundle.
   * An array of bundles from entity_bundle on witch pages of this plugin will be available.
   * @var array
   */
  public $entity_bundle;

  /**
   * The weight plugin weight.
   * @var integer;
   */
  public $weight;
}
