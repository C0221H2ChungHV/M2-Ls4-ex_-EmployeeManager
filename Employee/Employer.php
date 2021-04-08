<?php

namespace Staff;

class Employer
{
    private $first_name;
    private $last_name;
    private $date_of_birth;
    private $adress;
    private $job;

    public function __construct($data)
    {
        $this->first_name = $data['first_name'];
        $this->last_name = $data['last_name'];
        $this->date_of_birth = $data['date_of_birth'];
        $this->adress = $data['adress'];
        $this->job = $data['job'];
    }

    function getfirst_name()
    {
        return $this->first_name;
    }

    function getlast_name()
    {
        return $this->last_name;
    }

    function getdate_of_birth()
    {
        return $this->date_of_birth;
    }

    function getadress()
    {
        return $this->adress;
    }

    function getjob()
    {
        return $this->job;
    }
}
