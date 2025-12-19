<?php

// 1. List of domains that have paid you
$allowed_domains = [
    'example.com',
  	'test.com'
];

// 2. Get the domain checking in
$check_domain = isset($_GET['domain']) ? $_GET['domain'] : '';

// 3. Remove 'www.' to avoid mismatches
$check_domain = str_replace('www.', '', $check_domain);

// 4. Check if they are in the list
if (in_array($check_domain, $allowed_domains)) {
    echo 'ACTIVE'; // Status code for success
} else {
    echo 'INACTIVE'; // Status code for failure
}
?>
