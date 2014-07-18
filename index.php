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
            'name' => '.btn-primary-small',
            'file' => 'button',
            'items' => [
              'class' => 'btn-primary-small',
            ]
          ],
          [
            'name' => '.btn-primary-medium',
            'file' => 'button',
            'items' => [
              'class' => 'btn-primary-medium',
            ]
          ],
          [
            'name' => '.btn-primary-large',
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
            'name' => '.btn-secondary-small',
            'file' => 'button',
            'items' => [
              'class' => 'btn-secondary-small',
            ]
          ],
          [
            'name' => '.btn-secondary-medium',
            'file' => 'button',
            'items' => [
              'class' => 'btn-secondary-medium',
            ]
          ],
          [
            'name' => '.btn-secondary-large',
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
            'name' => '.btn-tertiary-small',
            'file' => 'button',
            'items' => [
              'class' => 'btn-tertiary-small',
            ]
          ],
          [
            'name' => '.btn-tertiary-medium',
            'file' => 'button',
            'items' => [
              'class' => 'btn-tertiary-medium',
            ]
          ],
          [
            'name' => '.btn-tertiary-large',
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
            'name' => '.btn-images-small',
            'file' => 'image-button',
            'items' => [
              'class' => 'btn-images-small',
            ]
          ],
          [
            'name' => '.btn-images-medium',
            'file' => 'image-button',
            'items' => [
              'class' => 'btn-images-medium',
            ]
          ],
          [
            'name' => '.btn-images-large',
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
            'name' => '.input-text-small',
            'file' => 'input-text',
            'items' => [
              'class' => 'input-text-small'
            ]
          ],
          [
            'name' => '.input-text-medium',
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
            'name' => '.input-select-small',
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
            'name' => '.input-select-medium',
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
            'name' => '.input-checkbox',
            'file' => 'input-checkbox',
            'items' => [
              'class' => 'input-checkbox'
            ]
          ],
          [
            'name' => '.input-checkbox-checked',
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
            'name' => '.input-radio',
            'file' => 'input-radio',
            'items' => [
              'class' => 'input-radio'
            ]
          ],
          [
            'name' => '.input-radio-checked',
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
    'name' => 'Tabs',
    'items' => [
      [
        'name' => '.tab-list',
        'items' => [
          [
            'name' => '.tab-active & .tab',
            'file' => 'tabs',
            'items' => [
              'items' => [
                [
                  'name' => 'Tab 1',
                  'class' => 'tab-active'
                ],
                [
                  'name' => 'Tab 2',
                  'class' => 'tab'
                ],
                [
                  'name' => 'Tab 3',
                  'class' => 'tab'
                ]
              ]
            ]
          ]
        ]
      ]
    ]
  ],
  [
    'name' => 'Icons',
    'items' => [
      [
        'name' => '.icon-call',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-call'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-code',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-code'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-delete',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-delete'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-down-arrow',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-down-arrow'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-edit',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-edit'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-facebook',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-facebook'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-flashlight',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-flashlight'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-google-plus',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-google-plus'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-heart',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-heart'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-instagram',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-instagram'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-location',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-location'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-mail',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-mail'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-media',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-media'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-menu',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-menu'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-mobile',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-mobile'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-people',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-people'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-photo',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-photo'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-pinterest',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-pinterest'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-reload',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-reload'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-rss',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-rss'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-search',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-search'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-share',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-share'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-twitter',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-twitter'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-video',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-video'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-view',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-view'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-x',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-x'
            ]
          ],
          [
            'name' => '.icon-message-circle',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-x-circle'
            ]
          ],
          [
            'name' => '.icon-message-donut',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-x-donut'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-yield',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-yield'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-graph',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-graph'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-copy',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-copy'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-signpost',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-signpost'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-book',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-book'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-utensils',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-utensils'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-grad',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-grad'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-medical',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-medical'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-picture',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-picture'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-bed',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-bed'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-golpher',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-golpher'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-message',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-message'
            ]
          ],
          [
            'name' => '.icon-message-donut',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-message-donut'
            ]
          ],
          [
            'name' => '.icon-message-circle',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-message-circle'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-apple',
        'items' => [
          [
            'name' => '',
            'file' => 'icon',
            'items' => [
              'class' => 'icon-apple'
            ]
          ],
        ]
      ],
      [
        'name' => '.icon-android',
        'items' => [
          [
            'name' => '',
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
