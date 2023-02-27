<?php
require_once __DIR__ . '/vendor/autoload.php';

use GeekBrains\LevelTwo\Blog\Post;
use GeekBrains\LevelTwo\Person\Name;
use GeekBrains\LevelTwo\Person\User;
use \DateTimeImmutable;


$post = new Post(1, new \GeekBrains\LevelTwo\Person\Person(
        new Name('Иван', 'Никитин'),
        new DateTimeImmutable() ),
        'Всем привет!');
print $post;    