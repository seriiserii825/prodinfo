<?php

if (!defined('ABSPATH')) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
	$basic_options_container = Container::make('theme_options', __('Basic Options'))
		->add_tab(__('Images'), array(
			Field::make('image', 'crb_logo_png', __('Logo png'))
			->set_value_type( 'url' ),
		))
		->add_tab(__('Contacts'), array(
			Field::make('text', 'crb_phone', __('Phone'))
				->set_help_text(esc_html__('Use all simbols for me', 'bs-prodinfo')),
			Field::make('text', 'crb_mail', __('Email')),
			Field::make('text', 'crb_address_ru', __('Address ru')),
			Field::make('text', 'crb_address_ro', __('Address ro')),
			Field::make('text', 'crb_address_en', __('Address en')),
		));

	// Add second options page under 'Basic Options'
	Container::make('theme_options', 'Blocks')
		->set_page_parent($basic_options_container) // reference to a top level container
		->add_tab(__('Block specialists'), array(
			Field::make('text', 'crb_specialist_title_ru', __('Block specialist title ru', 'bs-prodinfo')),
			Field::make('text', 'crb_specialist_subtitle_ru', __('Block specialist subtitle ru', 'bs-prodinfo')),

			Field::make('text', 'crb_specialist_title_ro', __('Block specialist title ro', 'bs-prodinfo')),
			Field::make('text', 'crb_specialist_subtitle_ro', __('Block specialist subtitle ro', 'bs-prodinfo')),

			Field::make('text', 'crb_specialist_title_en', __('Block specialist title en', 'bs-prodinfo')),
			Field::make('text', 'crb_specialist_subtitle_en', __('Block specialist subtitle en', 'bs-prodinfo')),
		));
}


add_action('after_setup_theme', 'crb_load');
function crb_load()
{
	require_once(__DIR__ . '/../../vendor/autoload.php');
	\Carbon_Fields\Carbon_Fields::boot();
}
