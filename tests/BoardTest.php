<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Perttisoomann\TaflGame\{Board, TaflBoard};

final class BoardTest extends TestCase
{
    public function testCanBeCreated(): void
    {
        $board = new TaflBoard();
        $this->assertInstanceOf(Board::class, $board);
    }

    public function testBoardIsCorrectSize(): void
    {
        $board = new TaflBoard();
        $this->assertCount($board::WIDTH * $board::HEIGHT, $board->getBoard());
    }
}
