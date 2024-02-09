<?php

    function getBaseUrl(): string
    {
        return "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';
    }
