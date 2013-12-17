<?php

/*
 * This file is part of the Sonata project.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\NotificationBundle\Model;

use Sonata\CoreBundle\Entity\ManagerInterface;

interface MessageManagerInterface extends ManagerInterface
{
    /**
     * @return integer
     */
    public function countStates();

    /**
     * @param $maxAge
     * @return void
     */
    public function cleanup($maxAge);

    /**
     * Cancels a given Message.
     *
     * @param MessageInterface $message
     *
     * @return void
     */
    public function cancel(MessageInterface $message);

    /**
     * Restarts a given message (cancels it and returns a new one, ready for publication).
     *
     * @param MessageInterface $message
     *
     * @return MessageInterface $message
     */
    public function restart(MessageInterface $message);
}
