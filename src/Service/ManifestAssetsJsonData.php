<?php
namespace App\Service;

use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\PathPackage;
use Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy;

class ManifestAssetsJsonData
{
    public function generate(): array
    {
        $package = new Package(new JsonManifestVersionStrategy(realpath('../pub/build/manifest.json')));

        return [
            'index.css' => $package->getUrl('index.css'),
            'runtime.js' => $package->getUrl('runtime.js'),
            'index.js' => $package->getUrl('index.js'),
            'critical.index.css' => file_get_contents(realpath('../pub/gulp/dist/index.css')),
        ];
    }
}
