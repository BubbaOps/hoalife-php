<?php

namespace BubbaOps\HoalifePhp\Interfaces;

use Psr\Http\Client\ClientInterface as HttpClientInterface;

/**
 * @property IConfig              $config
 * @property IClient              $instance
 * @property ?HttpClientInterface $httpClient
 *
 * @const     string             $VERSION
 *
 * @method static HttpClientInterface makeGuzzleClient()
 * @method static HttpClientInterface getHttpClient()
 */
interface IClient
{
    public static function makeClient(
        IConfig $config,
    ): IClient;

    public static function getClient(): IClient;

    public static function setClient(IClient $client = null,
    ): IClient;

    public function getConfig(): IConfig;

    public function withHttpClient(HttpClientInterface $client,
    ): IClient;
}
