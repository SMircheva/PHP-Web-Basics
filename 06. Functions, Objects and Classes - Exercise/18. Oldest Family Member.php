<?php
$n = intval(readline());
$family = new Family();
for ($i = 0; $i < $n; $i++)
{
    $input = explode(' ', readline());
    $personName = $input[0];
    $personAge = intval($input[1]);
    $person = new Person($personName, $personAge);
    $family->addMember($person);
}
//var_dump($family);

echo $family->getOldestMember();

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

    function __toString()
    {
        return "$this->name $this->age";
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

}

class Family {
    private $familyMembers;

    public function addMember(Person $person) {
        $this->familyMembers[] = $person;
    }

    public function getOldestMember() {
        $higestAge = -1;
        foreach ($this->familyMembers as $familyMember) {
            if ($familyMember->getAge() > $higestAge) {
                $higestAge = $familyMember->getAge();
                $oldestPerson = $familyMember;
            }
        }
        return $oldestPerson;
    }
}