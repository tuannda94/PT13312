<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function sumView()
    {
        return view('sum-view');
    }

    public function sum(Request $request)
    {
        $data = $request->all();
        $number_1 = $data['n_1'];
        $number_2 = $data['n_2'];
        $number_3 = $data['n_3'];
        //Tinh ket qua tra ve cua cong thuc
        // 1. Khai bao ra cac bien co the su dung
        $x;
        $x1;
        $x2;
        // 2. Kiem tra a == 0?
        if ($number_1  == 0) {
            $x = - $number_3/$number_2;
            return view('output', ['ket_qua' => $x]);
        }
        // 3. Neu a != 0
        else {
            // 3.1 Tinh delta
            $delta = $number_2*$number_2 - 4*$number_1*$number_3;
            // 3.1.1 Kiem tra delta
            if ($delta < 0) {
                $x = 'vo nghiem';
                return view('output', ['ket_qua' => $x]);
            } else if ($delta == 0) {
                $x = - $number_2/(2*$number_1);
                return view('output', ['ket_qua' => $x]);
            } else {
                $x1 = (- $number_2 + sqrt($delta))/(2*$number_1);
                $x2 = (- $number_2 - sqrt($delta))/(2*$number_1);
                return view('output', [
                    'ket_qua_1' => $x1,
                    'ket_qua_2' => $x2,
                ]);

            }
        }
    }
}
