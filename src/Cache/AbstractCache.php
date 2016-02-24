<?php

/*
 * This file is part of the Bouncer package.
 *
 * (c) François Hodierne <francois@hodierne.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bouncer\Cache;

/**
 * Base Cache class providing the Cache structure
 *
 * @author François Hodierne <francois@hodierne.net>
 */
abstract class AbstractCache implements CacheInterface
{

    public function getIdentity($id)
    {
        return $this->get("access_watch_identity_{$id}");
    }

    public function setIdentity($id, $identity)
    {
        return $this->set("access_watch_identity_{$id}", $identity, 86400);
    }

}
