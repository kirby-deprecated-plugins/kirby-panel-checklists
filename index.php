<?php
include __DIR__ . '/lib/core.php';

Kirby::plugin('jenstornell/checklists', [
  'fields' => [
    'checklist' => [
      'props' => [
        'message' => function() {
          $PanelChecklists = new PanelChecklists();
          return $PanelChecklists->render($this->model());
        }
      ]
    ]
  ]
]);