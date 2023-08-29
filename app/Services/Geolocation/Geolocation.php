<?php

namespace App;
use App\Services\Map\Map;
use App\Services\Satelite\Satelite;
class Geolocation
{
    /**
     * @var Map
     */
    private $map;

    /**
     * @var Satelite
     */

    private $satelite;

    public function __construct(Map $map, Satelite $satelite)
    {
        $this->map = $map;
        $this->satelite = $satelite;
    }

    public function search(string $name)
    {
        $locationinfo = $this->map->findAddress($name);
        return $this->satelite->pinpoint($locationinfo);
    }

}