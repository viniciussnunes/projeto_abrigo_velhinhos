<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function clearInput ($data)
    {
	    if (is_array($data)) {
		    foreach ($data as $key => $value) {
			    if(!is_array($value))
				    $value = $this->limpaString($value);				
                else{
                    $value = $this->clearInput($value);
                }
                $data[$key] = $value;
            }
        } else {
            $data = $this->limpaString($data);
        }

	    return $data;
    }
}
