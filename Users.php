<?php
require './vendor/autoload.php';

use Google\Cloud\Firestore\FirestoreClient;

class Users
{
    protected $database;
    protected $dbname = 'users';

    public function __construct()
    {
    }


    public function get(string $userID = NULL)
    {
        $db = new FirestoreClient([
            'projectId' => 'digital-receipt-a6570'
        ]);
        $usersRef = $db->collection('users');
        $snapshot = $usersRef->documents();
        foreach ($snapshot as $user) {
            printf('User: %s' . PHP_EOL, $user->id());
            echo "<br>";
            printf('First: %s' . PHP_EOL, $user['firstname']);
            echo "<br>";
            printf('Last: %s' . PHP_EOL, $user['lastname']);
            echo "<br>";
            printf('Born: %d' . PHP_EOL, $user['dateofbirth']);

            echo "<br><br>";
            printf(PHP_EOL);
        }
        printf('Retrieved and printed out all documents from the users collection.' . PHP_EOL);
    }

    public function insert(array $data)
    {
/*        if (empty($data) || !isset($data)) {
            return FALSE;
        }
        foreach ($data as $key => $value) {
            $this->database->getReference()->getChild($this->dbname)->getChild($key)->set($value);
        }
        return TRUE;*/
    }
}