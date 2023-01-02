<?php declare(strict_types=1);

namespace Perttisoomann\TaflGame;

class TaflBoard extends Board
{
    public const WIDTH = 11;
    public const HEIGHT = 11;

    public function __construct()
    {
        parent::__construct();

        $this->getPosition(1, 1)->setAvailability(false);
    }
}
