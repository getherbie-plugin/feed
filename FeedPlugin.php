<?php

/**
 * This file is part of Herbie.
 *
 * (c) Thomas Breuss <www.tebe.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace herbie\plugin\feed;

use Herbie;

class FeedPlugin extends Herbie\Plugin
{

    public function onPluginsInitialized()
    {
        if($this->config->isEmpty('plugins.config.feed.no_page')) {
            $this->config->push('pages.extra_paths', '@plugin/feed/pages');
        }
    }

}
