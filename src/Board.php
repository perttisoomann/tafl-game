<?php declare(strict_types=1);

namespace Perttisoomann\TaflGame;

class Board
{
    public const WIDTH = 8;
    public const HEIGHT = 8;

    protected array $board;

    public function __construct()
    {
        $this->initBoard();
    }

    protected function initBoard(): void
    {
        for ($y = 1; $y <= static::HEIGHT; ++$y) {
            for ($x = 1; $x <= static::WIDTH; ++$x) {
                $this->board[$this->getPositionIndex($x, $y)] = new BoardPosition();
            }
        }
    }

    public function getBoard(): array
    {
        return $this->board;
    }

    public function getPosition(int $x, int $y): BoardPosition
    {
        return $this->board[$this->getPositionIndex($x, $y)];
    }

    protected function getPositionIndex(int $x, int $y): int
    {
        return ($y - 1) * static::WIDTH + ($x - 1);
    }
}
