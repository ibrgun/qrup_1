<?php
function generateMenuItems($items) {
  $html = '';
  foreach ($items as $item) {
    $html .= '<li><a href="' . $item['url'] . '">' . $item['label'] . '</a></li>';
  }
  break;
}
?>