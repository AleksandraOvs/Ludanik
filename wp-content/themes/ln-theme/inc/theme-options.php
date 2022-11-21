<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Настройки')
        ->add_tab(__('Способы связи'), array(
            Field::make('complex', 'contacts', 'Ссылки')
                ->add_fields( array(
                    Field::make('text', 'contact_link', 'Ссылка на способ связи')
                        ->set_width(50),
                    Field::make('image', 'contact_image', 'Изображение способа связи')
                        ->set_width(50),
                )),
            ));
