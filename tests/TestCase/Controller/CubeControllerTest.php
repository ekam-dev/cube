<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\CubeController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\CubeController Test Case
 *
 * @uses \App\Controller\CubeController
 */
class CubeControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Cube',
    ];
}
