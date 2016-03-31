<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class AppTestCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('app:test')
            ->setDescription('...')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $acmeService = $this->getContainer()->get('app.acme.service');
        $object = $acmeService->action();

        $output->writeln($object->title);
    }

}
