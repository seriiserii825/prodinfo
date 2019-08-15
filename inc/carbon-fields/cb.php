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
				->set_value_type('url'),
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
		->set_page_parent($basic_options_container)// reference to a top level container
		->add_tab(__('Slider'), array(
			Field::make('text', 'crb_slider_title_ro', __('Block slider title ro', 'bs-prodinfo')),
			Field::make('text', 'crb_slider_subtitle_ro', __('Block slider subtitle ro', 'bs-prodinfo')),
			Field::make('rich_text', 'crb_slider_text_ro', __('Block slider text ro', 'bs-prodinfo')),

			Field::make('text', 'crb_slider_title_ru', __('Block slider title ru', 'bs-prodinfo')),
			Field::make('text', 'crb_slider_subtitle_ru', __('Block slider subtitle ru', 'bs-prodinfo')),
			Field::make('rich_text', 'crb_slider_text_ru', __('Block slider text ru', 'bs-prodinfo')),

			Field::make('text', 'crb_slider_title_en', __('Block slider title en', 'bs-prodinfo')),
			Field::make('text', 'crb_slider_subtitle_en', __('Block slider subtitle en', 'bs-prodinfo')),
			Field::make('rich_text', 'crb_slider_text_en', __('Block slider text en', 'bs-prodinfo')),

			Field::make('complex', 'crb_slider', __('Slider'))
				->add_fields(array(
					Field::make('image', 'crb_slider_photo', __('Slide Photo')),
				))
				->set_layout('tabbed-horizontal')
				->set_help_text('1350x600')
		))
		->add_tab(__('Offers'), array(
			Field::make('text', 'crb_offers_title_ro', __('Block offers title ro', 'bs-prodinfo'))
				->set_width(30),
			Field::make('text', 'crb_offers_subtitle_ro', __('Block offers subtitle ro', 'bs-prodinfo'))
				->set_width(30),
			Field::make('text', 'crb_offers_text_ro', __('Block offers text ro', 'bs-prodinfo'))
				->set_width(30),

			Field::make('text', 'crb_offers_title_ru', __('Block offers title ru', 'bs-prodinfo'))
				->set_width(30),
			Field::make('text', 'crb_offers_subtitle_ru', __('Block offers subtitle ru', 'bs-prodinfo'))
				->set_width(30),
			Field::make('text', 'crb_offers_text_ru', __('Block offers text ru', 'bs-prodinfo'))
				->set_width(30),

			Field::make('text', 'crb_offers_title_en', __('Block offers title en', 'bs-prodinfo'))
				->set_width(30),
			Field::make('text', 'crb_offers_subtitle_en', __('Block offers subtitle en', 'bs-prodinfo'))
				->set_width(30),
			Field::make('text', 'crb_offers_text_en', __('Block offers text en', 'bs-prodinfo'))
				->set_width(30),

			Field::make('complex', 'crb_offers', __('Slider'))
				->add_fields(array(
					Field::make('image', 'crb_offers_photo', __('Photo offers'))
						->set_help_text('120x120'),

					Field::make('text', 'crb_offers_item_title_ro', __('Block offers item title ro', 'bs-prodinfo'))
						->set_width(40),
					Field::make('text', 'crb_offers_item_text_ro', __('Block offers item text ro', 'bs-prodinfo'))
						->set_width(60),

					Field::make('text', 'crb_offers_item_title_ru', __('Block offers item title ru', 'bs-prodinfo'))
						->set_width(40),
					Field::make('text', 'crb_offers_item_text_ru', __('Block offers item text ru', 'bs-prodinfo'))
						->set_width(60),

					Field::make('text', 'crb_offers_item_title_en', __('Block offers item title en', 'bs-prodinfo'))
						->set_width(40),
					Field::make('text', 'crb_offers_item_text_en', __('Block offers item text en', 'bs-prodinfo'))
						->set_width(60),

				))
				->set_layout('tabbed-horizontal')
		))
		->add_tab(__('Members'), array(
			Field::make('text', 'crb_members_title_ro', __('Block members title ro', 'bs-prodinfo'))
				->set_width(50),
			Field::make('text', 'crb_members_text_ro', __('Block members text ro', 'bs-prodinfo'))
				->set_width(50),

			Field::make('text', 'crb_members_title_ru', __('Block members title ru', 'bs-prodinfo'))
				->set_width(50),
			Field::make('text', 'crb_members_text_ru', __('Block members text ru', 'bs-prodinfo'))
				->set_width(50),

			Field::make('text', 'crb_members_title_en', __('Block members title en', 'bs-prodinfo'))
				->set_width(50),
			Field::make('text', 'crb_members_text_en', __('Block members text en', 'bs-prodinfo'))
				->set_width(50),

			Field::make('text', 'crb_members_button_ro', __('Block members button ro', 'bs-prodinfo'))
				->set_width(30),
			Field::make('text', 'crb_members_button_ru', __('Block members button ru', 'bs-prodinfo'))
				->set_width(30),
			Field::make('text', 'crb_members_button_en', __('Block members button en', 'bs-prodinfo'))
				->set_width(30),

			Field::make('complex', 'crb_members', __('Slider'))
				->add_fields(array(
					Field::make('image', 'crb_members_photo', __('Photo offers'))
						->set_help_text('116x100'),

					Field::make('text', 'crb_offers_item_title_ro', __('Block offers item title ro', 'bs-prodinfo')),

					Field::make('text', 'crb_offers_item_title_ru', __('Block offers item title ru', 'bs-prodinfo')),

					Field::make('text', 'crb_offers_item_title_en', __('Block offers item title en', 'bs-prodinfo')),

				))
				->set_layout('tabbed-horizontal')
		));
}


add_action('after_setup_theme', 'crb_load');
function crb_load()
{
	require_once(__DIR__ . '/../../vendor/autoload.php');
	\Carbon_Fields\Carbon_Fields::boot();
}
