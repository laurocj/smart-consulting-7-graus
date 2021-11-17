<?php

namespace Geometry\Util;

class SequenceMicrotime implements ISequence
{

    public function nextId()
    {
        return microtime(true);
    }
}
