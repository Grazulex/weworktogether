<?php

namespace App\Console\Commands;

use App\Enums\StatusEnum;
use App\Models\Office;
use App\Models\OfficeSearch;
use App\Models\Search;
use App\Notifications\OfficesFindedNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class findOffice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = "find:office";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Find office for the search";

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $searches = Search::where("status", StatusEnum::OPEN->value)->get();
        $offices = Office::where("status", StatusEnum::OPEN->value)->get();
        foreach ($searches as $search) {
            $count = 0;
            foreach ($offices as $office) {
                if ($office->user_id != $search->user_id) {
                    if (
                        !OfficeSearch::where("search_id", $search->id)
                            ->where("office_id", $office->id)
                            ->first()
                    ) {
                        $distance = $this->getDistance(
                            $search->location->x,
                            $search->location->y,
                            $office->location->x,
                            $office->location->y
                        );
                        if ($distance <= $search->distance) {
                            OfficeSearch::create([
                                "search_id" => $search->id,
                                "office_id" => $office->id,
                                "distance" => $distance,
                            ]);
                            $count++;
                        }
                    }
                }
            }
            if ($count > 0) {
                Notification::send(
                    $search->user,
                    new OfficesFindedNotification("Matching", $count)
                );
            }
        }
    }

    function getDistance(
        $point1_lat,
        $point1_long,
        $point2_lat,
        $point2_long,
        $unit = "km",
        $decimals = 2
    ) {
        $degrees = rad2deg(
            acos(
                sin(deg2rad($point1_lat)) * sin(deg2rad($point2_lat)) +
                    cos(deg2rad($point1_lat)) *
                        cos(deg2rad($point2_lat)) *
                        cos(deg2rad($point1_long - $point2_long))
            )
        );
        switch ($unit) {
            case "km":
                $distance = $degrees * 111.13384;
                break;
            case "mi":
                $distance = $degrees * 69.05482;
                break;
            case "nmi":
                $distance = $degrees * 59.97662;
        }
        return round($distance, $decimals);
    }
}
