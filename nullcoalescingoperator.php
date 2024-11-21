<?php

// tanpa null coalescing operator
$data = [
    'action' => 'create'
];

if(isset($data['action'])) {
    $action = $data['action'];
} else {
    $action = 'nothing';
}

echo $action;

// null coalescing operator
$data = [];
$action = $data['action'] ?? 'nothing';
echo $action;