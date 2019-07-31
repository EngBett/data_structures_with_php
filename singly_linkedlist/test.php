<?php
require_once "linkedlist.php";

$llist = new linkedlist();

$llist->append(5);
$llist->append(4);
$llist->append(3);
$llist->append(2);
$llist->prepend(20);

$llist->remove(0);
//$llist->delete_node(3);
//$llist->pop();

$llist->display();