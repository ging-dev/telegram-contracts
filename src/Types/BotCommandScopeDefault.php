<?php

namespace Gingdev\TelegramContracts\Types;

/**
 * Represents the default scope of bot commands. Default commands are used if no commands with a narrower scope are specified for the user.
 */
class BotCommandScopeDefault implements BotCommandScope
{
    /**
     * @param string $type Scope type, must be default
     */
    public function __construct(
        public string $type,
    ) {
    }
}
