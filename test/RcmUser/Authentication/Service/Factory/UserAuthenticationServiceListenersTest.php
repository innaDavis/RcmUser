<?php
/**
 * UserAuthenticationServiceListenersTest.php
 *
 * LongDescHere
 *
 * PHP version 5
 *
 * @category  Reliv
 * @package   RcmUser\Test\Authentication\Service\Factory
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright 2014 Reliv International
 * @license   License.txt New BSD License
 * @version   GIT: <git_id>
 * @link      https://github.com/reliv
 */

namespace RcmUser\Test\Authentication\Service\Factory;

use RcmUser\Authentication\Service\Factory\UserAuthenticationServiceListeners;
use RcmUser\Zf2TestCase;

require_once __DIR__ . '/../../../../Zf2TestCase.php';

class UserAuthenticationServiceListenersTest extends Zf2TestCase
{
    /**
     * test
     *
     * @return void
     */
    public function test()
    {
        $factory = new UserAuthenticationServiceListeners();

        $service = $factory->createService($this->getMockServiceLocator());
        $this->assertInstanceOf(
            'RcmUser\Authentication\Event\UserAuthenticationServiceListeners',
            $service
        );
    }
}
 