<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateCarSpots extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $this->table('car_spots')
        ->addColumn('user_id', 'integer', [
            'null' => false,
        ])
        ->addColumn('name', 'string', [
            'limit' => 255,
            'null' => false,
        ])
        ->addColumn('description', 'text', [
            'null' => false,
        ])
        ->addColumn('address', 'string', [
            'limit' => 255,
            'null' => false,
        ])
        ->addColumn('latitude', 'decimal', [
            'null' => false,
            'precision' => 10,
            'scale' => 8
        ])
        ->addColumn('longitude', 'decimal', [
            'null' => false,
            'precision' => 11,
            'scale' => 8
        ])
        ->addColumn('created_at', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ])
        ->addColumn('modified_at', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ])
        ->addColumn('deleted_at', 'datetime', [
            'default' => null,
            'null' => true,
        ])
        ->addForeignKey('user_id', 'users', 'id', [
            'update' => 'CASCADE',
            'delete' => 'CASCADE',
        ])
        ->create();
    }

    public function down()
    {
        $this->table('car_spots')
        ->drop()
        ->save();
    }
}
