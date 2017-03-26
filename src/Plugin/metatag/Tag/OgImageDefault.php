<?php

namespace Drupal\custom_metatag\Plugin\metatag\Tag;

use \Drupal\metatag\Plugin\metatag\Tag\MetaPropertyBase;

/**
 * Provides a plugin for the 'og:image:default' meta tag.
 *
 * @MetatagTag(
 *   id = "og_image_default",
 *   label = @Translation("Default image"),
 *   description = @Translation("A default version of og:image defining a single image."),
 *   name = "og:image:default",
 *   group = "open_graph",
 *   weight = 10,
 *   type = "image",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class OgImageDefault extends MetaPropertyBase {

}
