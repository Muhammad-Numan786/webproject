<?php
 
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Sheets;
  
class GoogleSpreadsheetController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $sheets = Sheets::spreadsheet('1OzfT2a2VrnpsH65SFVxpzTWo5ROem2jdSAqeO-VVEqY')->sheet('google-sheet-api')->get();
        $header = $sheets->pull(0);
        $posts = Sheets::collection($header, $sheets);
        $posts = $posts->take(5000);
        
        $data = $posts->toArray();

        if ($data) {
            foreach ($data as $key => $value) {
                info($value);
            }
        }else{
            info('data not found');
        }
    }
}