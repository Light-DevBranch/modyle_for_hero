<?php

namespace Drupal\dlog_hero\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * DlogHeroPath annotation.
 *
 * @annotation
 */
class DlogHeroPath extends Plugin
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

  /** The paths to match.
   * An array with paths to limit witch plugin execution. Can contain wildcard (*).
   * and Drupal placeholders such as <front>.
   * @var array
   */
  public $match_path;
  /** The match type for match_path.
   * Value can be:
   * - listed: (default) Show only paths from match path.
   * - unlisted : Show at all paths, except those listed in math_path.
   * @var string
   */
  public $match_type;
  /**
   * The weight plugin weight.
   * @var integer
   */
  public $weight;
}
