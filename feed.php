<?php

Herbie\Hook::attach('pluginsInitialized', function() {
    $config = Herbie\DI::get('Config');
    if($config->isEmpty('plugins.config.feed.no_page')) {
        $config->push('pages.extra_paths', '@plugin/feed/pages');
    }
});
