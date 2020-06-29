<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hyperf\Etcd\V3;

use Etcd\Client;
use GuzzleHttp\Client as HttpClient;

class EtcdClient extends Client
{
    public function __construct(HttpClient $client)
    {
        $this->httpClient = $client;
    }
}
