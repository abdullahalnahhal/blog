<?php 
namespace App\Exceptions;

use Exception;
use App\Events\TestExceptionEvent ;

class TestException extends Exception
{
	public function __construct()
    {
        $this->message = 'hello';
    }
    /**
     * Report or log an exception.
     *
     * @return void
     */
    public function report()
    {

        return "ee";
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function render()
    {
    	event(new TestExceptionEvent($this));
    	dd(15);
        return 'User not found';
    }
}