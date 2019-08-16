<?php

if (!defined('ABSPATH')) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_technologies_post_options');
function crb_technologies_post_options()
{
	Container::make('post_meta', __('Short text'))
		->set_context( 'carbon_fields_after_title' )
		->where('post_id', '=', 14)
		->add_fields(array(
			Field::make('text', 'crb_advantages_title_ro', __('Title advantages ro'))
			->set_width(30),
			Field::make('text', 'crb_advantages_title_ru', __('Title advantages ru'))
				->set_width(30),
			Field::make('text', 'crb_advantages_title_en', __('Title advantages en'))
			->set_width(30),

			Field::make('image', 'crb_advantage_bg', __('Photo idea'))
				->set_help_text('1349x625')
				->set_value_type( 'url' )
		));
}

