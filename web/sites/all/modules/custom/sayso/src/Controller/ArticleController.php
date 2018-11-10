<?php
/**
 * Created by PhpStorm.
 * User: bclincy
 * Date: 10/8/18
 * Time: 11:37 AM
 */

namespace Drupal\sayso\Controller;


use Drupal\Core\Controller\ControllerBase;

class ArticleController extends ControllerBase {

  public function page() {
    $work = $this->t('hello world');
    $items = [
      ['name' => 'Article 1'],
      ['name' => 'Article 2'],
      ['name' => 'Article 3'],
      ['name' => 'Article 4'],
      ['name' => 'Article 5'],
    ];

    return
      [
      'theme' => 'article_list',
      '#items' => $items,
      '#content' => $work,
      '#title' => 'Our Article List'
    ];
  }

  public function hello($name) {
    die($name);

  }

  /**
   * {@inheritdoc}
   */
  protected function getModuleName() {
    return 'Sayso';
  }

}