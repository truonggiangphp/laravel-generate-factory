<?php

namespace Webike\Factory\Connections;

interface DatabaseContract
{
    public function fetchColumns($table);
}
