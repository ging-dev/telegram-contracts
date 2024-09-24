<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Describes Telegram Passport data shared with the bot by the user.
 */
class PassportData
{
    /**
     * @param EncryptedPassportElement[] $data        Array with information about documents and other Telegram Passport elements that was shared with the bot
     * @param EncryptedCredentials       $credentials Encrypted credentials required to decrypt the data
     */
    public function __construct(
        public array $data,
        public EncryptedCredentials $credentials,
    ) {
    }
}
