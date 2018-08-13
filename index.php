<?php
include __DIR__ . '/lib/core.php';

Kirby::plugin('jenstornell/checklists', [
  'fields' => [
    'checklist' => [
      'props' => [
        'list' => function($value = null) {
          $PanelChecklists = new PanelChecklists();
          return $PanelChecklists->render($this->model(), $value);
        },
      ]
    ]
  ]
]);