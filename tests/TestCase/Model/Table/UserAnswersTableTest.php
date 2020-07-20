<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserAnswersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserAnswersTable Test Case
 */
class UserAnswersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserAnswersTable
     */
    public $UserAnswers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_answers',
        'app.tests',
        'app.questions',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UserAnswers') ? [] : ['className' => UserAnswersTable::class];
        $this->UserAnswers = TableRegistry::getTableLocator()->get('UserAnswers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserAnswers);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
