<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * The boost was obtained by subscribing to Telegram Premium or by gifting a Telegram Premium subscription to another user.
 */
class ChatBoostSourcePremium implements ChatBoostSource
{
    /**
     * @param string $source Source of the boost, always "premium"
     * @param User   $user   User that boosted the chat
     */
    public function __construct(
        public string $source,
        public User $user,
    ) {
    }
}
