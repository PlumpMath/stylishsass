<?php

function view($view, $bin)
{
  ob_start();

  extract($bin);

  @include 'views/' . $view . '.php';

  return ob_get_clean();
}

?>
<!doctype html>
<html>
  <head>
    <title>Branding Test Page</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style/build/main.css">
    <script src="app/main.js"></script>
  </head>
  <body class="DEVELOPMENT">

    <div class="test">
      test
    </div>

    <h1 override-style="none">Style Tests</h1>
    <h2 override-style="none">Buttons</h2>
    <ul class="style-bin">
      <li class="style-item">
        <h3 override-style="none">Button Primary</h3>
        <h4 override-style="none">small</h4>
        <button class="btn-primary-small uppercase-bold">button</button>
        <h4 override-style="none">medium</h4>
        <button class="btn-primary-medium uppercase-bold">button</button>
        <h4 override-style="none">large</h4>
        <button class="btn-primary-large uppercase-bold">button</button>
      </li>
      <li class="style-item">
        <h3 override-style="none">Button Secondary</h3>
        <h4 override-style="none">small</h4>
        <button class="btn-secondary-small uppercase-bold">button</button>
        <h4 override-style="none">medium</h4>
        <button class="btn-secondary-medium uppercase-bold">button</button>
        <h4 override-style="none">large</h4>
        <button class="btn-secondary-large uppercase-bold">button</button>
      </li>
      <li class="style-item">
        <h3 override-style="none">Button Tertiary</h3>
        <h4 override-style="none">small</h4>
        <button class="btn-tertiary-small uppercase-bold">button</button>
        <h4 override-style="none">medium</h4>
        <button class="btn-tertiary-medium uppercase-bold">button</button>
        <h4 override-style="none">large</h4>
        <button class="btn-tertiary-large uppercase-bold">button</button>
      </li>
      <li class="style-item">
        <h3 override-style="none">Button Over Image</h3>
        <h4 override-style="none">small</h4>
        <div class="DEVELOPMENT-IMAGE">
          <button class="btn-images-small uppercase-bold">button</button>
        </div>
        <h4 override-style="none">medium</h4>
        <div class="DEVELOPMENT-IMAGE">
          <button class="btn-images-medium uppercase-bold">button</button>
        </div>
        <h4 override-style="none">large</h4>
        <div class="DEVELOPMENT-IMAGE">
          <button class="btn-images-large uppercase-bold">button</button>
        </div>
      </li>
    </ul>
    <h2 override-style="none">Inputs</h2>
    <ul class="style-bin">
      <li class="style-item">
        <h3 override-style="none">Input Text</h3>
        <h4 override-style="none">small</h4>
        <input class="input-text-small" type="text"/>
        <h4 override-style="none">medium</h4>
        <input class="input-text-medium" type="text"/>
      </li>
      <li class="style-item">
        <h3 override-style="none">Input Select</h3>
        <?= view('input-select', []); ?>
      </li>
    </ul>
  </body>
</html>
