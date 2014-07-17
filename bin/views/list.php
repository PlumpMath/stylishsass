<h2><?=$name?></h2>
<ul class="styles">
  <?php foreach($items as $item): ?>
  <li class="style">
    <?=view('item', $item)?>
  </li>
  <?php endforeach; ?>
</ul>
