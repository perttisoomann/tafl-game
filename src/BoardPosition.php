<?php declare(strict_types=1);

namespace Perttisoomann\TaflGame;

class BoardPosition
{
    protected bool $isAvailable = true;
    protected bool $isEscapePoint = false;

    public function setAvailability(bool $isAvailable): BoardPosition
    {
        $this->isAvailable = $isAvailable;
        return $this;
    }

    public function setEscapePoint(bool $isEscapePoint): BoardPosition
    {
        $this->isEscapePoint = $isEscapePoint;
        return $this;
    }
}
