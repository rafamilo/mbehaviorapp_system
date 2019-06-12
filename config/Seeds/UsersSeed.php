<?php
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $this->execute('delete from users;');
        $data[] = [
            'id' => -1,
            'name' => 'admin',
            'password' => (new DefaultPasswordHasher)->hash('admin'),
            'email' => 'admin@email.com',
            'created' => date('Y-m-d H:i:s'),
            'birthdate' => date('Y-m-d H:i:s'),
            'user_type_id' => 1,
            'created_by' => -1,
            'updated_by' => -1
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
