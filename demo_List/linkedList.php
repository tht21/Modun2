<?php

class linkedList
{ //chua co put cho null
    public $firstNode; //dau
    public $lastNode; //sau
    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
    }
    //nhan data
    function insertFistNode($data)
    {
        $node = new ListNode($data);
        //dua link banag node ban dau
        $this->link = $this->firstNode;
        //dat fist = node cua minh ban dau
        $this->firstNode = $node;
        if (!$this->lastNode) {
            $this->lastNode = $node;
        }
    }
    public function insertLastNode($data): void
    {
        $node = new ListNode($data);
        //ktr ton tai chua
        if (!$this->firstNode) {
            $this->insertFistNode($data);
        } else {
            $this->lastNode = $node;
            $this->lastNode->link = $node;
        }
    }
    public function removeFistNode($data): void
    {
    }
}
