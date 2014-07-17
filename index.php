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
        'name' => 'select',
        'items' => [
          [
            'name' => 'small',
            'file' => 'input-select',
            'items' => [
              'class' => 'input-select-small',
              'name'  => 'Placeholder',
              'items' => [
                [
                  'name' => 'Placeholder',
                  'value' => 'null',
                  'placeholder' => true
                ],
                [
                  'name' => 'Option 1',
                  'value' => 'option_1'
                ],
                [
                  'name' => 'Option 2',
                  'value' => 'option_2'
                ],
                [
                  'name' => 'Option 3',
                  'value' => 'option_3'
                ],
              ]
            ]
          ],
          [
            'name' => 'medium',
            'file' => 'input-select',
            'items' => [
              'class' => 'input-select-medium',
              'name'  => 'Placeholder',
              'items' => [
                [
                  'name' => 'Placeholder',
                  'value' => 'null',
                  'placeholder' => true
                ],
                [
                  'name' => 'Option 2',
                  'value' => 'option_2'
                ],
                [
                  'name' => 'Option 3',
                  'value' => 'option_3'
                ],
              ]
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
  [
    'name' => 'Icons',
    'items' => [
      [
        'name' => 'call',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-call'
            ]
          ],
        ]
      ],
      [
        'name' => 'code',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-code'
            ]
          ],
        ]
      ],
      [
        'name' => 'delete',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-delete'
            ]
          ],
        ]
      ],
      [
        'name' => 'down-arrow',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-down-arrow'
            ]
          ],
        ]
      ],
      [
        'name' => 'edit',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-edit'
            ]
          ],
        ]
      ],
      [
        'name' => 'facebook',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-facebook'
            ]
          ],
        ]
      ],
      [
        'name' => 'flashlight',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-flashlight'
            ]
          ],
        ]
      ],
      [
        'name' => 'google-plus',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-google-plus'
            ]
          ],
        ]
      ],
      [
        'name' => 'heart',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-heart'
            ]
          ],
        ]
      ],
      [
        'name' => 'instagram',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-instagram'
            ]
          ],
        ]
      ],
      [
        'name' => 'location',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-location'
            ]
          ],
        ]
      ],
      [
        'name' => 'mail',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-mail'
            ]
          ],
        ]
      ],
      [
        'name' => 'media',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-media'
            ]
          ],
        ]
      ],
      [
        'name' => 'menu',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-menu'
            ]
          ],
        ]
      ],
      [
        'name' => 'mobile',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-mobile'
            ]
          ],
        ]
      ],
      [
        'name' => 'people',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-people'
            ]
          ],
        ]
      ],
      [
        'name' => 'photo',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-photo'
            ]
          ],
        ]
      ],
      [
        'name' => 'pinterest',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-pinterest'
            ]
          ],
        ]
      ],
      [
        'name' => 'reload',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-reload'
            ]
          ],
        ]
      ],
      [
        'name' => 'rss',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-rss'
            ]
          ],
        ]
      ],
      [
        'name' => 'search',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-search'
            ]
          ],
        ]
      ],
      [
        'name' => 'share',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-share'
            ]
          ],
        ]
      ],
      [
        'name' => 'twitter',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-twitter'
            ]
          ],
        ]
      ],
      [
        'name' => 'video',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-video'
            ]
          ],
        ]
      ],
      [
        'name' => 'view',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-view'
            ]
          ],
        ]
      ],
      [
        'name' => 'x',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-x'
            ]
          ],
        ]
      ],
      [
        'name' => 'yield',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-yield'
            ]
          ],
        ]
      ],
      [
        'name' => 'graph',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-graph'
            ]
          ],
        ]
      ],
      [
        'name' => 'copy',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-copy'
            ]
          ],
        ]
      ],
      [
        'name' => 'signpost',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-signpost'
            ]
          ],
        ]
      ],
      [
        'name' => 'book',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-book'
            ]
          ],
        ]
      ],
      [
        'name' => 'utensils',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-utensils'
            ]
          ],
        ]
      ],
      [
        'name' => 'grad',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-grad'
            ]
          ],
        ]
      ],
      [
        'name' => 'medical',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-medical'
            ]
          ],
        ]
      ],
      [
        'name' => 'picture',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-picture'
            ]
          ],
        ]
      ],
      [
        'name' => 'bed',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-bed'
            ]
          ],
        ]
      ],
      [
        'name' => 'golpher',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-golpher'
            ]
          ],
        ]
      ],
      [
        'name' => 'message',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-message'
            ]
          ],
        ]
      ],
      [
        'name' => 'apple',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-apple'
            ]
          ],
        ]
      ],
      [
        'name' => 'android',
        'items' => [
          [
            'name' => 'default',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-android'
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
