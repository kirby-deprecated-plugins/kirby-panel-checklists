<?php
class PanelChecklists {
  function render($page, $list = 'my_checklist') {
    $option = option('jenstornell.checklists.lists')[$list];
    foreach($option as $item) {
      if(is_callable($item)) {
        $list_item = $item($page);
        if(isset($list_item['color'])) {
          $list_item['color'] = 'icon-' . $list_item['color'];
        }
        $checklist[] = $list_item;
      }
    }
    return $checklist;
  }
}