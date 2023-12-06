<?php

namespace Anand\UuidGenerator;

class Generator
{
    public static function uuid(): string
    {
        $uuid = uniqid('', true);

        $uuid .= uniqid('', true);
        $uuid .= $_SERVER['REQUEST_TIME_FLOAT'];
        $uuid .= $_SERVER['HTTP_USER_AGENT'];

        $uuid = md5($uuid);

        $formatted_uuid = substr($uuid, 0, 8) . '-' . substr($uuid, 8, 4) . '-' . substr($uuid, 12, 4) . '-' . substr($uuid, 16, 4) . '-' . substr($uuid, 20, 12);

        return $formatted_uuid;
    }
}
