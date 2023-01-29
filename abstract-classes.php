<?php

abstract class AchievementType {

    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();
        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name()));
    }

    abstract function qualifer($user);
}

class FirstThousandPoints extends AchievementType {

    public function qualifer($user)
    {
        # code...
    }
}   


$achievement = new FirstThousandPoints();
$achievement->qualifer('user');