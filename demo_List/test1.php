<?php
namespace aaa;
class Node1
{
  public $data;
  public $next;
}
class ListNode1
{
  public $data = NULL;
  public $next = NULL;
  public function __construct(string $data = NULL)
  {
    $this->data = $data;
  }
}
