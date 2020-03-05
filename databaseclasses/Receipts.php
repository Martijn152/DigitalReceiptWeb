<?php
require './vendor/autoload.php';
require "models/Receipt.php";


use Google\Cloud\Firestore\FirestoreClient;
use Kreait\Firebase\Factory;

class Receipts
{
    public function __construct()
    {
    }

    public function read(string $userID){

        $db = new FirestoreClient([
            'projectId' => 'digital-receipt-a6570'
        ]);

        if (!isset($userID) || empty($userID)) {

            return "Valid userID required.";

        } else {

            $receiptsRef = $db->collection('users')->document($userID)->collection('receipts');
            $snapshot = $receiptsRef->documents();

            $receiptList = [];

            foreach ($snapshot as $receipt) {

                $newreceipt = new Receipt($receipt['url'], $receipt->id());
                array_push($receiptList, $newreceipt);

            }

            return $receiptList;
        }
    }

/*    public function getURL(){

        $storage = (new Factory())->createStorage();

        $storageClient = $storage->getStorageClient();
        $defaultBucket = $storage->getBucket();

        $receiptRef = $defaultBucket->refFromURL();

        if (!isset($userID) || empty($userID)) {

            return "Valid userID required.";

        } else {

            $receiptsRef = $db->collection('users')->document('')->collection('receipts');
            $snapshot = $receiptsRef->documents();

            $receiptList = [];

            foreach ($snapshot as $receipt) {

                $newreceipt = new Receipt($receipt['url'], $receipt->id());
                array_push($receiptList, $newreceipt);

            }

            return $receiptList;
        }
    }*/

}