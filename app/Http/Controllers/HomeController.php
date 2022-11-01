<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use DB;


class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function paymentPage()
    {
        return view('Payments.payment');
    }

    public function paymentOrders()
    {

        $Orders = Payment::all();
        return view('Payments.OrderTables', compact('Orders'));
    }

    public function search(Request $request)
    {

        $output = '';
        $employee = Payment::
        where('id', 'like', '%' . $request->search . '%')
            ->orWhere('payment_id', 'like', '%' . $request->search . '%')
            ->orWhere('amount', 'like', '%' . $request->search . '%')
            ->orWhere('currency', 'like', '%' . $request->search . '%')
            ->orWhere('payment_status', 'like', '%' . $request->search . '%')->get();

        foreach ($employee as $employee) {
            $output .=
                '<tr>
                    <td>' . $employee->id . '</td>
                    <td>' . $employee->payment_id . '</td>
                    <td>' . $employee->amount . '</td>
                    <td>' . $employee->currency . '</td>
                    <td>' . $employee->payment_status . '</td>
                </tr>';
        }
        return response($output);
    }



    public function autocomplete()
    {
        return view('Autocomplete.autocomplete');

    }

    function fetch(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('country')
                ->where('countryname', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative;width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->country_name.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }
}
