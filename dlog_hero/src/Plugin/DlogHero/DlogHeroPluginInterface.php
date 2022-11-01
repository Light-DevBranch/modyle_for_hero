<?php
namespace Drupal\dlog_hero\Plugin\DlogHero;

use Drupal\Component\Plugin\PluginInspectionInterface;

interface DlogHeroPluginInterface extends PluginInspectionInterface{

  /**
   * Gets plugin status.
   *
   * @return bool;
   * The plugin status.
   */
  public function getEnabled();

  /**
   * Gets plugin weight.
   * @return int
   * The plugin weights.
   */
  public function getWeight();

  /**
   * Gets title for page.
   * @return string
   * Show current title page.
   */
  public function getHeroTitle();

  /**
   * Gets hero subtitle.
   * @return static
   * The subtitle.
   */
  public function getHeroSubTitle();

  /**
   * Gets image URI.
   * @return string
   * The URI of image.
   */
  public function getHeroImage();

  /**
   * Gets video URI.
   * An array with link to the same video in different type.
   * Keys of array is represents their type and value is link URI.
   *
   * @code
   * return [
   * 'video/mp4'=>'interesting-video.mp4',
   * 'video/avi'=>'more-interesting-video.mp4'
   * ]
   * @endcode
   *
   * @return array
   * An array of video URI.
   */
  public function getHeroVideo();
}
