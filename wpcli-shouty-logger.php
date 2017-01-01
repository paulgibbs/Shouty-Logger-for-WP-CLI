<?php
// MIT License. Copyright (c) 2017-present Paul Gibbs.

if (! defined('WP_CLI') || ! WP_CLI) {
    return;
}

/**
 * A logger for WP-CLI that promotes warning messages to errors.
 */
class ShoutyLogger extends WP_CLI\Loggers\Quiet
{
    public function warning($message)
    {
        $this->error($message);
    }
}

WP_CLI::set_logger(new ShoutyLogger);
