<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\NewStudent' => [
            'App\Listeners\ShowStudentDetails',
        ],
		
	
        'App\Events\NewCourse' => [
            'App\Listeners\ShowCourseDetails',
        ],


        'App\Events\NewInternship' => [
            'App\Listeners\ShowInternshipDetails',
        ],


        'App\Events\NewJob' => [
            'App\Listeners\ShowJobDetails',
        ],		
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
