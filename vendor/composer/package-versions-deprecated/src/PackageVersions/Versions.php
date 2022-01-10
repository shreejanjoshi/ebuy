<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.4@b174585d1fe49ceed21928a945138948cb394600',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '3.2.0@6d970a11479275300b5144e9373ce5feacfa9b91',
  'doctrine/dbal' => '3.2.0@5d54f63541d7bed1156cb5c9b79274ced61890e4',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.5.2@5b77477ba2981a00b423d1bb17084b87eb57a4a5',
  'doctrine/doctrine-migrations-bundle' => '3.2.1@c1b10bc1466e08bba82640e49c7bbcce0c9853c2',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.3.2@b6e43bb5815f4dbb88c79a0fef1c669dfba52d58',
  'doctrine/orm' => '2.10.4@cccb2e2fdfed2969afb3d65c5ea82bafdefbe1a7',
  'doctrine/persistence' => '2.2.3@5e7bdbbfe9811c06e1f745d1c166647d5c47d6ee',
  'doctrine/sql-formatter' => '1.1.2@20c39c2de286a9d3262cc8ed282a4ae60e265894',
  'egulias/email-validator' => '3.1.2@ee0db30118f661fb166bcffbf5d82032df484697',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'laminas/laminas-code' => '4.5.1@6fd96d4d913571a2cd056a27b123fa28cb90ac4e',
  'nikic/php-parser' => 'v4.13.2@210577fe3cf7badcc5814d99455df46564f3c077',
  'psr/cache' => '2.0.0@213f9dbc5b9bfbc4f8db86d2838dc968752ce13b',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '2.0.0@ef29f6d262798707a9edd554e2b82517ef3a9376',
  'symfony/asset' => 'v5.4.0@49e355b57b4b6a5cef1d2dbc4e36cee49369cf7d',
  'symfony/cache' => 'v5.4.0@d97d6d7f46cb69968f094e329abd987d5ee17c79',
  'symfony/cache-contracts' => 'v2.5.0@ac2e168102a2e06a2624f0379bde94cd5854ced2',
  'symfony/config' => 'v5.4.0@e39cf688c80fd79ab0a6a2d05a9facac9b2d534b',
  'symfony/console' => 'v5.4.1@9130e1a0fc93cb0faadca4ee917171bd2ca9e5f4',
  'symfony/dependency-injection' => 'v5.4.1@9bd1ef389a2fe05fea7306b6155403e8a960d73d',
  'symfony/deprecation-contracts' => 'v3.0.0@c726b64c1ccfe2896cb7df2e1331c357ad1c8ced',
  'symfony/doctrine-bridge' => 'v5.4.1@876bef571479727119e03ff82752a8ba56dc5c91',
  'symfony/dotenv' => 'v5.4.0@9bd173ff68fa90d39c59d91a42ae42b7f11713a0',
  'symfony/error-handler' => 'v5.4.1@1e3cb3565af49cd5f93e5787500134500a29f0d9',
  'symfony/event-dispatcher' => 'v5.4.0@27d39ae126352b9fa3be5e196ccf4617897be3eb',
  'symfony/event-dispatcher-contracts' => 'v3.0.0@aa5422287b75594b90ee9cd807caf8f0df491385',
  'symfony/filesystem' => 'v5.4.0@731f917dc31edcffec2c6a777f3698c33bea8f01',
  'symfony/finder' => 'v5.4.0@d2f29dac98e96a98be467627bd49c2efb1bc2590',
  'symfony/flex' => 'v2.0.1@3dbfa5c4e3308fd9def9a2006a20fa0c272a30a2',
  'symfony/form' => 'v5.4.2@2083142efa11a2e32c71a78c8f8cce0c1210fa10',
  'symfony/framework-bundle' => 'v5.4.1@4e67931a6771a54e69383058a3e4e6f1acc154dd',
  'symfony/http-foundation' => 'v5.4.1@5dad3780023a707f4c24beac7d57aead85c1ce3c',
  'symfony/http-kernel' => 'v5.4.1@2bdace75c9d6a6eec7e318801b7dc87a72375052',
  'symfony/mailer' => 'v5.4.2@309ba427654351dcad9691bef817b96920ebd2cf',
  'symfony/maker-bundle' => 'v1.36.4@716eee9c8b10b33e682df1b7d80b9061887e9691',
  'symfony/mime' => 'v5.4.2@1bfd938cf9562822c05c4d00e8f92134d3c8e42d',
  'symfony/options-resolver' => 'v5.4.0@b0fb78576487af19c500aaddb269fd36701d4847',
  'symfony/password-hasher' => 'v5.4.2@62748882f339e2a00751af8375258cf1b66a1c57',
  'symfony/polyfill-intl-grapheme' => 'v1.23.1@16880ba9c5ebe3642d1995ab866db29270b36535',
  'symfony/polyfill-intl-icu' => 'v1.23.0@4a80a521d6176870b6445cfb469c130f9cae1dda',
  'symfony/polyfill-intl-idn' => 'v1.24.0@749045c69efb97c70d25d7463abba812e91f3a44',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.1@9174a3d80210dca8daa7f31fec659150bbeabfc6',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.1@1100343ed1a92e3a38f9ae122fc0eb21602547be',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/property-access' => 'v5.4.0@07db4e9d1f0bf4b8a0c60a25b2672f20ab8f3562',
  'symfony/property-info' => 'v5.4.0@c21b4221522779537e9693d51536d8174579b1fd',
  'symfony/proxy-manager-bridge' => 'v5.4.0@91e5ddd5f7381f4a5524f10c8789c6d5d07f04e7',
  'symfony/routing' => 'v5.4.0@9eeae93c32ca86746e5d38f3679e9569981038b1',
  'symfony/runtime' => 'v5.4.1@f7a8403ae0e6847e56881c3c106e4ea2ec4ef8c9',
  'symfony/security-bundle' => 'v5.4.2@4da15c5a30ec90acb4dd2d27b2e046385212192e',
  'symfony/security-core' => 'v5.4.2@11d87d17650a5b8b21da8b6df208bfc8a9b918c7',
  'symfony/security-csrf' => 'v5.4.0@a6bfeedc3fcaafd2eb9ce61f0eb6a95e0316a3e2',
  'symfony/security-guard' => 'v5.4.0@5ebbe00731ce0773108116875083a82098ddddcf',
  'symfony/security-http' => 'v5.4.2@3682db42fc542ad4b42a2e0d064cb25e13df494a',
  'symfony/service-contracts' => 'v2.4.1@d664541b99d6fb0247ec5ff32e87238582236204',
  'symfony/stopwatch' => 'v5.4.0@208ef96122bfed82a8f3a61458a07113a08bdcfe',
  'symfony/string' => 'v5.4.0@9ffaaba53c61ba75a3c7a3a779051d1e9ec4fd2d',
  'symfony/translation-contracts' => 'v2.5.0@d28150f0f44ce854e942b671fc2620a98aae1b1e',
  'symfony/twig-bridge' => 'v5.4.0@faed6ad85a2f8e675820422a74c4e0d5858a6821',
  'symfony/twig-bundle' => 'v5.4.0@de8634b8c604a42277c6cc7e4f0d1e9e30c5ec7f',
  'symfony/validator' => 'v5.4.2@6ad607e0bb8f3a8b04bf56fecb9a95ac55cea9a3',
  'symfony/var-dumper' => 'v5.4.1@2366ac8d8abe0c077844613c1a4f0c0a9f522dcc',
  'symfony/var-exporter' => 'v5.4.0@d59446d6166b1643a8a3c30c2fa8e16e51cdbde7',
  'symfony/yaml' => 'v5.4.0@034ccc0994f1ae3f7499fa5b1f2e75d5e7a94efc',
  'symfonycasts/reset-password-bundle' => 'v1.11.0@09fcd0d893bbd58d4477787c6cb5a4ffc4fc9455',
  'twig/extra-bundle' => 'v3.3.4@1fe52d84aa22b7891c7717ef904b1551c8d70100',
  'twig/twig' => 'v3.3.4@65cb6f0b956485e1664f13d023c55298a4bb59ca',
  'symfony/web-profiler-bundle' => 'v5.4.2@c779222d5a87b7d947e56ac09b02adb34cf8b610',
  'symfony/polyfill-ctype' => '*@a07c58312fd3c5e56c3651d1c2ca31183153d641',
  'symfony/polyfill-iconv' => '*@a07c58312fd3c5e56c3651d1c2ca31183153d641',
  'symfony/polyfill-php72' => '*@a07c58312fd3c5e56c3651d1c2ca31183153d641',
  '__root__' => 'dev-main@a07c58312fd3c5e56c3651d1c2ca31183153d641',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}