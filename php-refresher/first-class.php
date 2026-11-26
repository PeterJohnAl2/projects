<?php

class Grade
{
    public function __construct(
        public string $subject,
        public int $semester,
        public ?float $value,
    ) {}

    public function isMissing(): bool
    {
        return $this->value === null;
    }

    public function isPassing(): bool
    {
        return !$this->isMissing() && $this->value >= 75;
    }
}

// First object: no grade yet
$science = new Grade('Science 10', 1, null);

// Second object
$math = new Grade('Mathematics 10', 1, 85.5);

var_dump($math->isMissing());   // bool(false)
var_dump($math->isPassing());   // bool(true)
var_dump($science->isPassing()); // bool(false): a missing grade is not passing
