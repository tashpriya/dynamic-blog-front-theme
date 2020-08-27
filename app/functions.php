<?php

/**
 * @param string $url
 * @return string
 */
function assets(string $url) {
    return ROOT_URL . ((substr($url, 0, 1) == '/') ? substr($url, 1) : $url);
}

/**
 * @param string $url
 * @return string
 */
function url(string $url = '/') {
    return assets($url);
}

/**
 * @param string|null $path
 * @return false|string
 */
function root_path(string $path = null) {
    if(!$path) {
        return ROOT_PATH;
    }
    return ROOT_PATH . '/' . $path;
}