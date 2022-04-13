
<?php
class Battery
{
    private int $energy;
    public function __construct()
    {
    }
    public function getEnergy()
    {
        return $this->energy;
    }
    public function setEnergy($energy)
    {
        $this->energy = $energy;
    }
    public function decrementEnergy()
    {
        $this->energy -= 1;
    }
}
$barrery = new Battery(500);

$barrery->setEnergy(3);

echo $barrery->decrementEnergy();
echo $barrery->getEnergy();
