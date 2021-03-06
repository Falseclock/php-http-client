<?php

/**
 * HTTP Client Error Explanation
 *
 * @author    Nurlan Mukhanov <nurike@gmail.com>
 * @copyright 2019 Nurlan Mukhanov
 * @license   https://opensource.org/licenses/MIT The MIT License
 * @link      http://packagist.org/packages/sendgrid/php-http-client
 */

namespace SendGrid;

class ClientError
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $help;

    /**
     * @var array Unknown fields
     */
    public $other;

    /**
     * ClientError constructor.
     *
     * @param array $error
     */
    public function __construct($error)
    {
        foreach($error as $key => $value) {
            if(property_exists($this, $key)) {
                $this->$key = $value;
            } else {
                $this->other[] = [ $key => $value ];
            }
        }
    }
}
