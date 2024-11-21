<?php

// khusus php menggunakan tipe data callable
// untuk memanggilnya menggunakan function call_user function(callable, arguments)
// tapi sebenarnya gk ada aturan jadi boleh pake call_user_func() atau mau langsung pake variable function itu boleh $filter()

function sayhello($name, callable $filter){
    $finalname = call_user_func($filter, $name);  // ini sama dengan $filter($name);
    echo "hello $finalname \n";    
}

sayhello("eko", "strtoupper");
sayhello("eko", "strtolower");
sayhello("eko", function (string $name): string {
    return strtoupper($name);
});
sayhello("eko", fn($name) => strtoupper($name));

