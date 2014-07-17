<div class="<?=$class?>">
  <span class="input-select-placeholder"><?=$name?></span>
  <ul class="input-select-options">
    <?php foreach($items as $item):
      echo view('input-select-li', $item);
    endforeach;?>
  </ul>
  <select class="hidden">
    <?php foreach($items as $item):
      echo view('input-select-option', $item);
    endforeach;?>
  </select>
</div>