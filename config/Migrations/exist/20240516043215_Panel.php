<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class Panel extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $this->table('panel')
            ->addColumn('app_name', 'string', ['default' => null, 'null' => false])
            ->addColumn('username', 'string', ['default' => null, 'null' => true])
            ->addColumn('password', 'string', ['default' => null, 'null' => true])
            ->addColumn('url', 'string', ['default' => null, 'null' => true])
            ->addColumn('file', 'string', ['default' => null, 'null' => true])
            ->addColumn('docs_file', 'string', ['default' => null, 'null' => true])
            ->addColumn('public_key', 'string', ['default' => null, 'null' => true])
            ->addColumn('secret_key', 'string', ['default' => null, 'null' => true])
            ->addColumn('api_key', 'string', ['default' => null, 'null' => true])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
    }
}
