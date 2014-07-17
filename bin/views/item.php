<h3><?=$name?></h3>
<?php foreach($items as $item):
echo view('subitem', $item);
endforeach;?>
