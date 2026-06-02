<?php
namespace Drupal\react_ts_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'ReactTsBlock' block.
 *
 * @Block(
 *  id = "react_ts_block",
 *  admin_label = @Translation("React TypeScript Block"),
 * )
 */
class ReactTsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['react_ts_block'] = [
      '#markup' => '<div id="react-ts-app"></div>',
      '#attached' => [
        'library' => 'react_ts_module/react_ts_app'
      ],
    ];
    return $build;
  }
}
