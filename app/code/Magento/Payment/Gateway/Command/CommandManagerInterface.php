<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Payment\Gateway\Command;

use Magento\Payment\Gateway\CommandInterface;
use Magento\Payment\Model\InfoInterface;

/**
 * Interface CommandManagerInterface
 * @api
 */
interface CommandManagerInterface extends CommandPoolInterface
{
    /**
     * Executes command by code
     *
     * @param string $commandCode
     * @param InfoInterface|null $payment
     * @param array $arguments
     * @return ResultInterface|null
     */
    public function executeByCode($commandCode, InfoInterface $payment = null, array $arguments = []);

    /**
     * Executes command
     *
     * @param CommandInterface $command
     * @param InfoInterface|null $payment
     * @param array $arguments
     * @return ResultInterface|null
     */
    public function execute(CommandInterface $command, InfoInterface $payment = null, array $arguments = []);
}
