<?php

require_once __DIR__ . '/../vendor/autoload.php';

use HtmlNode\Node;

$node = new Node('a');

$node
    ->setAttribute('href', '#')
    ->setText('Foo <foo>');

echo $node . PHP_EOL;

$node = new Node('div');

$node
    ->addClass('panel')
    ->addClass('panel-default')
    ->setHtml('<div class="panel-body">The body of the panel</div><!-- Test --><div class="panel-footer"></div>');

$node->find('div')->addClass('added-class');

// Should have added-class on both divs
echo $node->render() . PHP_EOL;
