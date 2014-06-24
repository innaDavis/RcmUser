<?php
/**
 * DoctrineAclRoleDataMapperTest.php
 *
 * LongDescHere
 *
 * PHP version 5
 *
 * @category  Reliv
 * @package   RcmUser\Test\Acl\Service\Factory
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright 2014 Reliv International
 * @license   License.txt New BSD License
 * @version   GIT: <git_id>
 * @link      https://github.com/reliv
 */

namespace RcmUser\Test\Acl\Service\Factory;

use RcmUser\Acl\Service\Factory\DoctrineAclRoleDataMapper;
use RcmUser\Zf2TestCase;

require_once __DIR__ . '/../../../../Zf2TestCase.php';

/**
 * Class DoctrineAclRoleDataMapperTest
 *
 * LongDescHere
 *
 * PHP version 5
 *
 * @category  Reliv
 * @package   RcmUser\Test\Acl\Service\Factory
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright ${YEAR} Reliv International
 * @license   License.txt New BSD License
 * @version   Release: <package_version>
 * @link      https://github.com/reliv
 */
class DoctrineAclRoleDataMapperTest extends Zf2TestCase
{

    /**
     * test
     *
     * @return void
     */
    public function test()
    {

        $factory = new DoctrineAclRoleDataMapper();

        $service = $factory->createService($this->getMockServiceLocator());
        $this->assertInstanceOf(
            'RcmUser\Acl\Db\DoctrineAclRoleDataMapper',
            $service
        );

        //
        $this->assertInstanceOf(
            'Doctrine\ORM\EntityManager',
            $service->getEntityManager()
        );

        $this->assertTrue(
            is_string($service->getEntityClass())
        );
    }
}
 