<?php declare(strict_types = 1);
namespace Phan\Output;

use Phan\IssueInstance;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Abstraction for printing (or recording) `IssueInstance`s in various ways.
 */
interface IssuePrinterInterface
{

    /**
     * @param IssueInstance $instance
     * @return void
     */
    public function print(IssueInstance $instance);

    /**
     * @param OutputInterface $output
     * @return void
     */
    public function configureOutput(OutputInterface $output);
}
