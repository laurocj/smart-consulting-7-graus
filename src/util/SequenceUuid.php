<?php

namespace Geometry\Util;

use Geometry\Util\ISequence;

class SequenceUuid implements ISequence
{

    public function nextId()
    {
        return md5(uniqid(rand(), true));
    }
}
