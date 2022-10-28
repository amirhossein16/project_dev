<?php


namespace App\Repositories;


use App\Models\FishingTable;

class FishingTestRepository extends Repository
{
    public function model()
    {
        return FishingTable::class;
    }
}
