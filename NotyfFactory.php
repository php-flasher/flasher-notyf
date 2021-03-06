<?php

namespace Flasher\Notyf\Prime;

use Flasher\Prime\Factory\NotificationFactory;

/**
 * @mixin NotyfBuilder
 */
final class NotyfFactory extends NotificationFactory
{
    /**
     * @inheritDoc
     */
    public function createNotificationBuilder()
    {
        return new NotyfBuilder($this->getStorageManager(), new Notyf(), 'notyf');
    }
}
