<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Smartphone;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function showSmartphones()
    {
        $smartphones = Smartphone::all();

        return view('smartphones.index', ['smartphones' => $smartphones]);
    }

    public function showSmartphoneDetail($id)
    {
        $smartphone = Smartphone::findOrFail($id);
        return view('smartphones.show', [
            'smartphone' => $smartphone,
            'is_booked' => $smartphone->is_booked
        ]);
    }

    public function bookSmartphone($id)
    {
        $smartphone = Smartphone::findOrFail($id);

        if ($smartphone->is_booked) {
            return redirect()->route('smartphones.show', $id)
                             ->with('error', 'Maaf, smartphone ini sudah dibooking.');
        }

        $smartphone->is_booked = true;
        $smartphone->save();

        return redirect()->route('smartphones.show', $id)
                         ->with('success', 'Selamat! Anda berhasil mem-booking ' . $smartphone->name);
    }

    public function cancelBooking($id)
    {
        $smartphone = Smartphone::findOrFail($id);
        $smartphone->is_booked = false;
        $smartphone->save();

        return redirect()->route('smartphones.show', $id)
                         ->with('success', 'Booking untuk ' . $smartphone->name . ' berhasil dibatalkan.');
    }
}

