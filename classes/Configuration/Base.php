<?php
/**
 * Created by PhpStorm.
 * User: bryce
 * Date: 5/3/15
 * Time: 10:22 PM
 */

namespace WordWrap\Configuration;
use Exception;


/**
 * This will be a class to wrap, and write out configuration files
 *
 * Class Base
 * @package WordWrap\Configuration
 */
abstract class Base {

    /**
     * @param $data array of data to map onto objects
     * @throws Exception we are expecting there to be a class to map things onto for each array, or else we have developer error
     */
    public function __construct($data) {
        foreach($data as $key => $value) {
            if(is_array($value)) {
                $this->{$key} = new $key($value);
            }
            else {
                $this->{$key} = $value;
            }
        }
    }
}