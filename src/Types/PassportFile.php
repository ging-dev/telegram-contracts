<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * This object represents a file uploaded to Telegram Passport. Currently all Telegram Passport files are in JPEG format when decrypted and don't exceed 10MB.
 */
class PassportFile
{
    /**
     * @param string $file_id        Identifier for this file, which can be used to download or reuse the file
     * @param string $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param int    $file_size      File size in bytes
     * @param int    $file_date      Unix time when the file was uploaded
     */
    public function __construct(
        public string $file_id,
        public string $file_unique_id,
        public int $file_size,
        public int $file_date,
    ) {
    }
}
