<?php

class Employee
{
    private $imya;
    private $zarplata;
    private $vozrast;

    public function __construct($imya, $zarplata, $vozrast)
    {
        $this->imya = $imya;
        $this->zarplata = $zarplata;
        $this->vozrast = $vozrast;
    }

    public function getImya()
    {
        return $this->imya;
    }

    public function getZarplata()
    {
        return $this->zarplata . '$';
    }

    public function getVozrast()
    {
        return $this->vozrast;
    }

    public function setImya($imya)
    {
        $this->imya = $imya;
    }

    public function setZarplata($zarplata)
    {
        $this->zarplata = $zarplata;
    }

    public function setVozrast($vozrast)
    {
        if ($vozrast >= 0 && $vozrast <= 120) {
            $this->vozrast = $vozrast;
        } else {
            echo 'Неверный возраст';
        }
    }

    public function pokazat()
    {
        echo 'Имя: ' . $this->imya . "\n";
        echo 'Зарплата: ' . $this->zarplata . '$' . "\n";
        echo 'Возраст: ' . $this->vozrast . "\n";
    }

    public function povysitZarplatu()
    {
        $this->zarplata = $this->zarplata * 1.1;
    }
}

?>
