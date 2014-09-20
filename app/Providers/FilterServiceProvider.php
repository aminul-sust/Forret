<?php namespace Forret\Providers;

use Illuminate\Routing\FilterServiceProvider as ServiceProvider;

class FilterServiceProvider extends ServiceProvider {

	/**
	 * The filters that should run before all requests.
	 *
	 * @var array
	 */
	protected $before = [
		'Forret\Http\Filters\MaintenanceFilter',
	];

	/**
	 * The filters that should run after all requests.
	 *
	 * @var array
	 */
	protected $after = [
		//
	];

	/**
	 * All available route filters.
	 *
	 * @var array
	 */
	protected $filters = [
		'auth' => 'Forret\Http\Filters\AuthFilter',
		'auth.basic' => 'Forret\Http\Filters\BasicAuthFilter',
		'csrf' => 'Forret\Http\Filters\CsrfFilter',
		'guest' => 'Forret\Http\Filters\GuestFilter',
	];

}