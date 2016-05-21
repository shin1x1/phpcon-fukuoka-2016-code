<?php
declare(strict_types = 1);

namespace Acme\Shop;

interface Arrayable
{
    public function toArray(): array;
}