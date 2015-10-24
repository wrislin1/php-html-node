<?php

namespace HtmlNode;

interface NodeInterface
{
    public function setAttribute($name, $value = null);

    public function removeAttribute($name);

    public function addClass($class);

    public function removeClass($classToRemove);
}
