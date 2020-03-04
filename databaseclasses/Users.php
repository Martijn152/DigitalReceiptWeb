<?php
require './vendor/autoload.php';
require "models/User.php";

use Google\Cloud\Firestore\FirestoreClient;

class Users
{

    public function __construct()
    {
    }

    public function read(string $userID = NULL)
    {

        $db = new FirestoreClient([
            'projectId' => 'digital-receipt-a6570'
        ]);

        if (!isset($userID) || empty($userID)) {

            $usersRef = $db->collection('users');
            $snapshot = $usersRef->documents();

            $userList = [];

            foreach ($snapshot as $user) {

                $newuser = new User($user['firstname'], $user['lastname'], $user['dateofbirth'], $user->id());
                array_push($userList, $newuser);

            }
            return $userList;

        } else {

            $usersRef = $db->collection('users')->document($userID);
            $user = $usersRef->snapshot();

            $userList = [];

            $newuser = new User($user->data()['firstname'], $user->data()['lastname'], $user->data()['dateofbirth'], $userID);
            array_push($userList, $newuser);

            return $userList;
        }


    }

    public function create(User $user)
    {

        $db = new FirestoreClient([
            'projectId' => 'digital-receipt-a6570'
        ]);

        $data = [
            'firstname' => $user->getFirstname(),
            'lastname' => $user->getLastname(),
            'dateofbirth' => $user->getDateofbirth()
        ];

        if (!isset($user) || empty($user)) {
            return "Enter a valid User object.";

        } else {
            $usersRef = $db->collection('users')->document($user->getId());
            $snapshot = $usersRef->set($data);
            var_dump($snapshot);
        }
        return "User added.";

    }

    public function update(string $oldId, User $user)
    {

        $db = new FirestoreClient([
            'projectId' => 'digital-receipt-a6570'
        ]);

        $data = [
            'firstname' => $user->getFirstname(),
            'lastname' => $user->getLastname(),
            'dateofbirth' => $user->getDateofbirth()
        ];

        if (!isset($user) || empty($user)) {
            return "Enter a valid User object.";

        } else {
            $usersRef = $db->collection('users')->document($oldId);
            $snapshot = $usersRef->update([
                ['path' => 'firstname', 'value' => $user->getFirstname()],
                ['path' => 'lastname', 'value' => $user->getLastname()],
                ['path' => 'dateofbirth', 'value' => $user->getDateofbirth()],
            ]);
            var_dump($snapshot);
        }
        return "User added.";

    }
    public function delete(string $userId)
    {

        $db = new FirestoreClient([
            'projectId' => 'digital-receipt-a6570'
        ]);

        $db->collection('users')->document($userId)->delete();

        return "User Removed.";

    }
}