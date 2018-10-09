<?php
$n = intval(readline());
$allOldPeople = [];
for ($i = 0; $i < $n; $i++)
{
    $input = explode(' ', readline());
    $currentPerson = new Person($input[0], intval($input[1]));
    if ($currentPerson->IsOld()) {
        $allOldPeople[] = $currentPerson;
    }
}

usort($allOldPeople, function (Person $p1, Person $p2){
    return $p1->getName() <=> $p2->getName();
});

foreach ($allOldPeople as $person) {
    $name = $person->getName();
    $age = $person->getAge();

    echo "$name - $age".PHP_EOL;
}

class Person {
    private $name;
    private $age;

    /**
     * Person constructor.
     * @param $name
     * @param $age
     */
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }



    function IsOld() {
        if ($this->age > 30) {
            return true;
        } else {
            return false;
        }
    }
}