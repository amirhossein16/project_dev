<?php


namespace App\Repositories;


use App\Models\FishingTable;

class FishingRepository extends Repository
{
    public function model()
    {
        return FishingTable::class;
    }
}
