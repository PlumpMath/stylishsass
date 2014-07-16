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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
      <li class="style-item">
        <h3 override-style="none">Input Check Box</h3>
        <div class="input-checkbox checked">
          <input class="hidden" type="checkbox" name="checkbox-1"/>
        </div>
        <label for="checkbox-1">Check Box 1</label>
        <div class="input-checkbox">
          <input class="hidden" type="checkbox" name="checkbox-2"/>
        </div>
        <label for="checkbox-1">Check Box 2</label>
        <script>
          (function ()
          {
            $(".input-checkbox").on("click", function (e)
            {
              $(this).toggleClass("checked");
            });
          })();
        </script>
      </li>
      <li class="style-item">
        <h3 override-style="none">Input Check Box</h3>
        <div class="input-radio checked">
          <input class="hidden" type="radio" name="radio-1"/>
        </div>
        <label for"radio-1">Radio 1</label>
        <div class="input-radio">
          <input class="hidden" type="radio" name="radio-2"/>
        </div>
        <label for"radio-1">Radio 2</label>
        <div class="input-radio">
          <input class="hidden" type="radio" name="radio-3"/>
        </div>
        <label for"radio-1">Radio 3</label>
        <script>
          (function ()
          {
            $(".input-radio").on("click", function (e)
            {
              if ( ! $(this).hasClass("checked")) $(this).addClass("checked");
            });
          })();
        </script>
      </li>
    </ul>
    <h2 override-style="none">Icons</h2>
    <ul class="style-bin">
      <li class="style-item">
        <h3 override-style="none">call</h3>
        <i class="icon-call"></i>
        <h3 override-style="none">code</h3>
        <i class="icon-code"></i>
        <h3 override-style="none">delete</h3>
        <i class="icon-delete"></i>
        <h3 override-style="none">down-arrow</h3>
        <i class="icon-down-arrow"></i>
        <h3 override-style="none">edit</h3>
        <i class="icon-edit"></i>
        <h3 override-style="none">facebook</h3>
        <i class="icon-facebook"></i>
        <h3 override-style="none">flashlight</h3>
        <i class="icon-flashlight"></i>
        <h3 override-style="none">google-plus</h3>
        <i class="icon-google-plus"></i>
        <h3 override-style="none">heart</h3>
        <i class="icon-heart"></i>
        <h3 override-style="none">instagram</h3>
        <i class="icon-instagram"></i>
        <h3 override-style="none">location</h3>
        <i class="icon-location"></i>
        <h3 override-style="none">mail</h3>
        <i class="icon-mail"></i>
        <h3 override-style="none">media</h3>
        <i class="icon-media"></i>
        <h3 override-style="none">menu</h3>
        <i class="icon-menu"></i>
        <h3 override-style="none">mobile</h3>
        <i class="icon-mobile"></i>
        <h3 override-style="none">people</h3>
        <i class="icon-people"></i>
        <h3 override-style="none">photo</h3>
        <i class="icon-photo"></i>
        <h3 override-style="none">pinterest</h3>
        <i class="icon-pinterest"></i>
        <h3 override-style="none">reload</h3>
        <i class="icon-reload"></i>
        <h3 override-style="none">rss</h3>
        <i class="icon-rss"></i>
        <h3 override-style="none">search</h3>
        <i class="icon-search"></i>
        <h3 override-style="none">share</h3>
        <i class="icon-share"></i>
        <h3 override-style="none">twitter</h3>
        <i class="icon-twitter"></i>
        <h3 override-style="none">video</h3>
        <i class="icon-video"></i>
        <h3 override-style="none">view</h3>
        <i class="icon-view"></i>
        <h3 override-style="none">x</h3>
        <i class="icon-x"></i>
        <h3 override-style="none">yield</h3>
        <i class="icon-yield"></i>
        <h3 override-style="none">youvisit</h3>
        <i class="icon-youvisit"></i>
      </li>
    </ul>
  </body>
</html>
