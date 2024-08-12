<?php

namespace Test\Mikonam;

use Mmb\Support\Serialize\ShortableAliases;
use Mmb\Support\Serialize\ShortDev;
use Mmb\Support\Serialize\ShortSerialize;

include __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/bootstrap/app.php';


class Foo implements ShortableAliases
{
    public function __construct(
        public int $number,
        public Bar $bar,
    )
    {
    }

    public function getShortAliases() : array
    {
        return [
            'n' => 'number',
            'b' => 'bar',
        ];
    }
}

class BarBase implements ShortableAliases
{
    public function __construct(
        private int $text,
    )
    {
    }

    public function getShortAliases() : array
    {
        return [
            'T' => 'text',
        ];
    }
}

class Bar extends BarBase
{
    public Foo $foo;
    public function __construct(
        public string $text,
        public array $list,
        public array $map,
    )
    {
        parent::__construct(9000);
    }

    public function getShortAliases() : array
    {
        return [
            'f' => 'foo',
            't' => 'text',
            'l' => 'list',
            'm' => 'map',
        ] + ShortDev::addPrefix(parent::getShortAliases(), parent::class);
    }
}


$object = new Foo(200, new Bar('Hello', [1, 2, 3], ['hi' => 'bye']));
$object->bar->foo = $object;

echo serialize($object);
echo "\n";


echo $ss = \Mmb\Support\Serialize\ShortSerialize::serialize($object);
echo "\n";


echo serialize([
    [
        ['text' => 'Hello'],
    ],
    [
        ['text' => 'Hello'],
    ],
]);
echo "\n";
echo ShortSerialize::serialize([
    [
        ['text' => 'Hello'],
    ],
    [
        ['text' => 'Hello'],
    ],
]);
echo "\n";

dd(\Mmb\Support\Serialize\ShortSerialize::unserialize($ss));


