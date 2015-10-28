<?php

namespace CascadeEnergy\ServiceDiscovery\Client;

interface ServiceClientInterface
{
    public function get($path, $query = null);
}
