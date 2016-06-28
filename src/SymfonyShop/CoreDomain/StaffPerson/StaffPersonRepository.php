<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 28.06.16
 * Time: 23:35
 */

namespace SymfonyShop\CoreDomain\StaffPerson;


interface StaffPersonRepository
{
    public function find(StaffPersonId $staffPersonId);

    public function findAll();

    public function add(StaffPerson $staffPerson);

    public function remove(StaffPerson $staffPerson);
}