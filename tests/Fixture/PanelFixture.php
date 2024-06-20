<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PanelFixture
 */
class PanelFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'panel';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'app_name' => 'Lorem ipsum dolor sit amet',
                'username' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'url' => 'Lorem ipsum dolor sit amet',
                'file' => 'Lorem ipsum dolor sit amet',
                'docs_file' => 'Lorem ipsum dolor sit amet',
                'public_key' => 'Lorem ipsum dolor sit amet',
                'secret_key' => 'Lorem ipsum dolor sit amet',
                'api_key' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-05-16 07:18:57',
                'modified' => '2024-05-16 07:18:57',
            ],
        ];
        parent::init();
    }
}
