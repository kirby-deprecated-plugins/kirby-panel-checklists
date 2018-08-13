<?php
include __DIR__ . '/lib/core.php';

Kirby::plugin('jenstornell/checklists', [
  'fields' => [
    'checklist' => [
      'props' => [
        'list' => function($value = null) {
          if(!$value) throw new Exception("The list value is missing in your blueprint");
          $PanelChecklists = new PanelChecklists();
          return $PanelChecklists->render($this->model(), $value);
        },
      ]
    ]
  ]
]);