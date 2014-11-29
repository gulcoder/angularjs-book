<?php

use ElephantIO\Client,
ElephantIO\Engine\SocketIO\Version1X;

require __DIR__ . '/vendor/autoload.php';

$wait = 1;
echo "Starting...\n";
$client = new Client(new Version1X('http://localhost:8080'));
$client->initialize();
while (true) {
    echo '.';

    $client->emit('broadcast:msg', ['message' => 'wiadomość z php']);

    usleep($wait * 500000);
}
$client->close();
