<?php
if (class_exists('\ProudSourcing\ExceptionHandler\Core\Exception\ExceptionHandler')) {
    set_exception_handler(
        [
            new \ProudSourcing\ExceptionHandler\Core\Exception\ExceptionHandler($debugMode),
            'handleUncaughtThrowable'
        ]
    );
}