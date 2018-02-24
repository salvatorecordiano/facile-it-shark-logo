<?php

namespace Facile\Cbr\Shark;

use Composer\Composer;
use Composer\Console\Application;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Symfony\Component\Console\Input\ArgvInput;
use Facile\Cbr\Shark\Command\SharkLogoCommand;

/**
 * Class SharkLogo
 * @package Facile\Cbr\Shark
 */
class SharkLogo implements PluginInterface
{
    /**
     * @param Composer $composer
     * @param IOInterface $io
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        foreach (debug_backtrace() as $trace) {
            if (!isset($trace['object']) || !$trace['object'] instanceof Application) {
                continue;
            }

            $app = $trace['object'];
            $app->add(new SharkLogoCommand());

            break;
        }
    }
}
