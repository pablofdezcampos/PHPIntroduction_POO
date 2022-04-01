<?php
include 'includes/header.php';

interface Player
{
    function dorsal(): int;
}

class PlayerDorsal implements Player
{

    public function __construct(public int $dorsal)
    {
    }

    public function dorsal(): int
    {
        return $this->dorsal;
    }
}

class TeamPlayer extends PlayerDorsal implements Player
{
    public function __construct(private string $name, public int $dorsal)
    {
    }

    public function dorsal(): int
    {
        return $this->dorsal;
    }
}

$teamPlayer = new TeamPlayer("Real Madrid", 12);
echo $teamPlayer->dorsal();


include 'includes/footer.php';
