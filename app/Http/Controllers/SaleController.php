<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;
use Mockery\Exception;

class SaleController extends Controller
{
    public function __construct() {

    }

    public function index() {

        $this->seeding();
        $sales =  Sale::all();

        return view('sales.index', compact('sales'));

    }


    private function seeding() {

        if (count(Sale::all())) {
            return;
        }

        $path = public_path()  . "/data.csv" ;

        if ( ( $handle = fopen($path, 'r')) !== FALSE) {
            $index = 0;

            while (( $data = fgetcsv($handle, 10000)) !== FALSE) {
                if ($index++ <= 0) {
                    continue;
                }
                if (Sale::where('id', '=', $data[0])->exists() ) {
                    continue;
                }

                $record = new Sale;
                $record->id = $data[0];
                $record->address = $data[2];
                $record->type = $data[11];
                $record->neighborhood = $data[12];
                $record->price = $data[16];
                $record->bedroom = $data[17];
                $record->badroom = $data[18];

                try {
                    $record->save();
                }catch (Exception $e) {

                }
            }
            fclose($handle);
        }
    }
}
