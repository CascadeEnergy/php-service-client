<?php

namespace CascadeEnergy\ServiceDiscovery\Client;

interface ServiceClientInterface
{
    public function get($path, $query = null);
    public function put($path, $query = null, $payload = null);
    public function post($path, $query = null, $payload = null);
    public function delete($path, $query = null);
}
