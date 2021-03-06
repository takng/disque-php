<?php
namespace Disque\Command;

use Disque\Command\Response\JobsWithQueueResponse;

class QPeek extends BaseCommand implements CommandInterface
{
    /**
     * Tells the argument types for this command
     *
     * @var int
     */
    protected $argumentsType = self::ARGUMENTS_TYPE_STRING_INT;

    /**
     * Tells which class handles the response
     *
     * @var int
     */
    protected $responseHandler = JobsWithQueueResponse::class;

    /**
     * Get command
     *
     * @return string Command
     */
    public function getCommand()
    {
        return 'QPEEK';
    }
}