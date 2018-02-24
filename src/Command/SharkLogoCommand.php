<?php

namespace Facile\Cbr\Shark\Command;

use Composer\Command\BaseCommand;
use Facile\Cbr\Shark\Logo\SharkLogo;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class SharkLogoCommand
 * @package Facile\Cbr\Shark\Command
 */
class SharkLogoCommand extends BaseCommand
{
    protected function configure()
    {
        $this->setName('shark')
            ->setDescription('Display Shark logo')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(sprintf("\n%s\n", SharkLogo::getLogo()));

        return 0;
    }
}
