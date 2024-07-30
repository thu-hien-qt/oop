<?php
namespace bt8;

interface Movable
{
    public function moveUp();
    public function moveDown();
    public function moveLeft();
    public function moveRight();
}