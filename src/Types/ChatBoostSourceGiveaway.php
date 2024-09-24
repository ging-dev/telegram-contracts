<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * The boost was obtained by the creation of a Telegram Premium or a Telegram Star giveaway. This boosts the chat 4 times for the duration of the corresponding Telegram Premium subscription for Telegram Premium giveaways and prize_star_count / 500 times for one year for Telegram Star giveaways.
 */
class ChatBoostSourceGiveaway implements ChatBoostSource
{
    /**
     * @param string    $source              Source of the boost, always "giveaway"
     * @param int       $giveaway_message_id Identifier of a message in the chat with the giveaway; the message could have been deleted already. May be 0 if the message isn't sent yet.
     * @param User|null $user                Optional. User that won the prize in the giveaway if any; for Telegram Premium giveaways only
     * @param int|null  $prize_star_count    Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
     * @param bool|null $is_unclaimed        Optional. True, if the giveaway was completed, but there was no user to win the prize
     */
    public function __construct(
        public string $source,
        public int $giveaway_message_id,
        public ?User $user,
        public ?int $prize_star_count,
        public ?bool $is_unclaimed,
    ) {
    }
}
