<?php
/**
 * Copyright (c) 2020. Adrian Schubek
 * https://adriansoftware.de
 */

if (!function_exists("objstorage")) {
    function objstorage(): SplObjectStorage
    {
        return new SplObjectStorage();
    }
}