<?php

use Doctum\Doctum;
use Doctum\RemoteRepository\GitHubRemoteRepository;
use Symfony\Component\Finder\Finder;

$projectDir = dirname(__DIR__);
$sourceDir = "$projectDir/src";
$buildDir = "$projectDir/docs";
$cacheDir = "$projectDir/cache";

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->in($sourceDir);

return new Doctum($iterator, [
    'title' => 'AAB Open Connect PHP Client API',
    'language' => 'en',
    'build_dir' => $buildDir,
    'cache_dir' => $cacheDir,
    'source_dir' => $projectDir,
    'remote_repository' => new GitHubRemoteRepository('stechstudio/hoalife-php', $projectDir),
    'default_opened_level' => 2,
]);
