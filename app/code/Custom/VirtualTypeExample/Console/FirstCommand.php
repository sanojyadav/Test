<?php
namespace Custom\VirtualTypeExample\Console;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
class FirstCommand extends Command
{
    const NAME = 'name';

    protected $helperClassA;

    public function __construct(
        \Custom\VirtualTypeExample\Helper\HelperClassA $helperClassA,
        string $name = null)
    {
        $this->helperClassA = $helperClassA;
        parent::__construct($name);
    }
    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this->setName('custom:virtualtype:showresult');
        $this->setDescription('Virtual Type');
        parent::configure();
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $c = $this->helperClassA->getResult();
        $output->writeln($c);
    }
}