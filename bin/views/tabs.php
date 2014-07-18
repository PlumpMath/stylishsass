<ol class="tab-list">
  <?php foreach($items as $item):
  echo view('tab', $item);
  endforeach;?>
</ol>
