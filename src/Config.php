<?php

namespace BubbaOps\HoalifePhp;

use BubbaOps\HoalifePhp\Interfaces\IConfig;

/**
 * Configuration Class for this package.
 */
class Config implements IConfig
{
    /**
     * @param  string  $apiKey          The API Key provided by HOA Life.
     * @param  string  $signingSecret   The shared secret for validation results.
     * @param  string  $baseUrl         The base portion of the API URL.
     * @param  string  $agent           The name the client will provide as the http agent.
     */
    final public function __construct(
        public readonly string $apiKey,
        public readonly string $signingSecret,
        public readonly string $baseUrl,
        public readonly string $agent
    ) {
    }

    /**
     * Static constructor that accepts an array
     * rather than each individual setting.
     */
    public static function make(array $settings = []): IConfig
    {
        $settings = array_merge(self::settingsTemplate(), $settings);

        return new static(
            apiKey: $settings['api_key'],
            signingSecret: $settings['signing_secret'],
            baseUrl: $settings['base_url'],
            agent: $settings['agent'],
        );
    }

    /**
     * Provides a helper array that can be used for
     * configuring the config.
     */
    public static function settingsTemplate(): array
    {
        return [
            'api_key' => \hoa_env(
                key: 'HOALIFE_API_KEY',
                default: null
            ),
            'signing_secret' => \hoa_env(
                key: 'HOALIFE_API_SIGNING_SECRET',
                default: null
            ),
            'base_url' => \hoa_env(
                key: 'HOALIFE_API_HOST',
                default: 'https://api.hoalife.com'
            ),
            'agent' => \hoa_env(
                key: 'HOALIFE_SDK_AGENT',
                default: 'hoalife-php-client/'
            ),

        ];
    }

    /**
     * Serializes the object as a (json) string.
     */
    public function __toString(): string
    {
        return $this->toJson();
    }

    /**
     * Serializes the object as a json string.
     */
    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

    /**
     * Converts the object to an array.
     */
    public function toArray(): array
    {
        return [
            'api_key' => $this->apiKey,
            'signing_secret' => $this->signingSecret,
            'base_url' => $this->baseUrl,
            'agent' => $this->agent,
        ];
    }
}
