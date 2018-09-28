<?php
namespace Icecave\Flax\Message;

class DecoderState
{
    const BEGIN        = 0;
    const VERSION      = 1;
    const MESSAGE_TYPE = 2;
    const RPC_REPLY    = 3;
    const RPC_FAULT    = 4;
    const COMPLETE     = 5;
}
