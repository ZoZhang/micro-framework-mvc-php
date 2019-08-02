<?php
/**
 * This helper builds the To object for a /mail/send API call
 *
 * PHP Version - 5.6, 7.0, 7.1, 7.2
 *
 * @package   vendor\SendGrid
 * @author    Elmer Thomas <dx@sendgrid.com>
 * @copyright 2018 SendGrid
 * @license   https://opensource.org/licenses/MIT The MIT License
 * @version   GIT: <git_id>
 * @link      http://packagist.org/packages/sendgrid/sendgrid
 */

namespace vendor\SendGrid;

/**
 * This class is used to construct a To object for the /mail/send API call
 *
 * @package vendor\SendGrid
 */
class To extends EmailAddress implements \JsonSerializable
{
}
