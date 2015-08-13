<?php

namespace App\Http;

/**
 * Flash class
 */
class Flash
{

	/**
	 * What the method do
	 *
	 * @return void
	 */
	private function create($title, $message, $level, $key = 'flash_message')
	{
		session()->flash($key, [
			'title' => $title,
			'message' => $message, 
			'level' => $level
        ]);    
	}

	/**
	 * Default flash message()
	 * 
	 * @param  string $title   
	 * @param  string $message 
	 * @return void
	 */
    public function info($title, $message)
    {
        $this->create($title, $message, 'info');
    }

    /**
     * Display success message
     * 
     * @param  string $title   
     * @param  string $message 
     * @return void          
     */
    public function success($title, $message)
    {
        $this->create($title, $message, 'success');
    }

    /**
     * Display error message
     * 
     * @param  string $title   
     * @param  string $message 
     * @return void          
     */
    public function error($title, $message)
    {
        $this->create($title, $message, 'error');
    }

    /**
     * Display an overlay message that need to be confirmed
     * 		
     * @param  string $title  
     * @param  string $message
     * @param  string $level   the type of the message. By default success
     * @return void          
     */
    public function overlay($title, $message, $level = 'success')
    {
    	$this->create($title, $message, $level, 'flash_message_overlay');
    }
}
