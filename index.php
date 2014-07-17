<?php

function view($view, $bin)
{
  ob_start();

  extract($bin);

  @require 'bin/views/' . $view . '.php';

  $result = ob_get_contents();
  ob_clean();
  return $result;
}

$lists = [
  [
    'name' => 'Buttons',
    'items' => [
      [
        'name' => 'primary',
        'items' => [
          [
            'name' => 'small',
            'file' => 'button',
            'items' => [
              'class' => 'btn-primary-small',
            ]
          ],
          [
            'name' => 'medium',
            'file' => 'button',
            'items' => [
              'class' => 'btn-primary-medium',
            ]
          ],
          [
            'name' => 'large',
            'file' => 'button',
            'items' => [
              'class' => 'btn-primary-large',
            ]
          ],
        ]
      ],
      [
        'name' => 'secondary',
        'items' => [
          [
            'name' => 'small',
            'file' => 'button',
            'items' => [
              'class' => 'btn-secondary-small',
            ]
          ],
          [
            'name' => 'medium',
            'file' => 'button',
            'items' => [
              'class' => 'btn-secondary-medium',
            ]
          ],
          [
            'name' => 'large',
            'file' => 'button',
            'items' => [
              'class' => 'btn-secondary-large',
            ]
          ],
        ]
      ],
      [
        'name' => 'tertiary',
        'items' => [
          [
            'name' => 'small',
            'file' => 'button',
            'items' => [
              'class' => 'btn-tertiary-small',
            ]
          ],
          [
            'name' => 'medium',
            'file' => 'button',
            'items' => [
              'class' => 'btn-tertiary-medium',
            ]
          ],
          [
            'name' => 'large',
            'file' => 'button',
            'items' => [
              'class' => 'btn-tertiary-large',
            ]
          ],
        ]
      ],
      [
        'name' => 'images',
        'items' => [
          [
            'name' => 'small',
            'file' => 'image-button',
            'items' => [
              'class' => 'btn-images-small',
            ]
          ],
          [
            'name' => 'medium',
            'file' => 'image-button',
            'items' => [
              'class' => 'btn-images-medium',
            ]
          ],
          [
            'name' => 'large',
            'file' => 'image-button',
            'items' => [
              'class' => 'btn-images-large',
            ]
          ],
        ]
      ],
    ]
  ],
  [
    'name' => 'Inputs',
    'items' => [
      [
        'name' => 'text',
        'items' => [
          [
            'name' => 'small',
            'file' => 'input-text',
            'items' => [
              'class' => 'input-text-small'
            ]
          ],
          [
            'name' => 'medium',
            'file' => 'input-text',
            'items' => [
              'class' => 'input-text-medium'
            ]
          ],
        ]
      ],
      [
        'name' => 'checkbox',
        'items' => [
          [
            'name' => 'checked',
            'file' => 'input-checkbox',
            'items' => [
              'class' => 'input-checkbox'
            ]
          ],
          [
            'name' => 'unchecked',
            'file' => 'input-checkbox',
            'items' => [
              'class' => 'input-checkbox-checked'
            ]
          ],
        ]
      ],
      [
        'name' => 'radio',
        'items' => [
          [
            'name' => 'checked',
            'file' => 'input-radio',
            'items' => [
              'class' => 'input-radio'
            ]
          ],
          [
            'name' => 'unchecked',
            'file' => 'input-radio',
            'items' => [
              'class' => 'input-radio-checked'
            ]
          ],
        ]
      ],
    ]
  ],
];

?>

<!DOCTYPE html>
<head>
  <link href="main.css" rel="stylesheet" type="text/css">
<head>
<body>
  <h1>Style Tests</h1>
  <?php foreach ($lists as $list):
  echo view('list', $list);
  endforeach;?>
</body>
</html>
