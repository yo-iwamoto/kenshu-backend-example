<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreatePostsTable extends AbstractMigration
{
    public function change(): void
    {
        $this->table('posts')
            ->addColumn('title', 'string', ['null' => false])
            ->addColumn('body', 'string', ['null' => false])
            ->addTimeStamps()
            ->create();
    }
}
