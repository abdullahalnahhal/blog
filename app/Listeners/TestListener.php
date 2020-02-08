<?php

namespace App\Listeners;

use App\Exceptions\TestException;
use App\Events\TestExceptionEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class TestListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Exception  $event
     * @return void
     */
    public function handle(TestExceptionEvent $event)
    {
        if ($event->exception instanceof TestException) {
            dd(444444444444444);
            // $event->setResponse($event->getException()->getRedirectResponse());
        }
    }
}
