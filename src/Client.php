<?php

namespace BubbaOps\HoalifePhp;

use BubbaOps\HoalifePhp\Interfaces\IClient;
use BubbaOps\HoalifePhp\Interfaces\IConfig;
use Psr\Http\Client\ClientInterface as HttpClientInterface;

class Client implements IClient
{
    const VERSION = '0.1.1';

    protected static ?IClient $instance = null;

    protected ?HttpClientInterface $httpClient = null;

    final public function __construct(public IConfig $config)
    {
    }

    public static function getHttpClient(): HttpClientInterface
    {
        self::getClient()->httpClient = self::getClient()->httpClient ?? self::getClient()->makeGuzzleClient();

        return self::getClient()->httpClient;
    }

    /**
     * Get the globally available instance of the client,
     */
    public static function getClient(): IClient
    {
        static::$instance = static::$instance ?? Client::makeClient(Config::make());

        return static::$instance;
    }

    /**
     * Make the globally available instance of the client.
     */
    public static function makeClient(
        IConfig $config,
    ): IClient {
        return self::setClient(new static($config));
    }

    /**
     * Set the shared instance of the client.
     */
    public static function setClient(IClient $client = null,
    ): IClient {
        return static::$instance = $client;
    }

    protected static function makeGuzzleClient(): HttpClientInterface
    {
        $client = new \GuzzleHttp\Client([
            // Base URI is used with relative requests
            'base_uri' => static::$instance->config->baseUrl,
            // You can set any number of default request options.
            'timeout' => 2.0,
        ]);
        self::getClient()->withHttpClient($client);

        return self::getClient()->getHttpClient();
    }

    public function withHttpClient(HttpClientInterface $client,
    ): IClient {
        self::getClient()->httpClient = $client;

        return self::getClient();
    }

    /**
     * Get the configuration for this instance.
     */
    public function getConfig(): IConfig
    {
        return self::getClient()->config;
    }
}
