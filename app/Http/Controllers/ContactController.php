<?php

namespace App\Http\Controllers;

use App\Mail\NewEnquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        $d = $request->validate(['name' => ['required', 'string', 'max:100'], 'company' => ['nullable', 'string', 'max:120'], 'email' => ['required', 'email', 'max:150'], 'phone' => ['nullable', 'string', 'max:40'], 'service' => ['required', 'in:Corporate Gifts,Event Management,IT Solutions'], 'message' => ['required', 'string', 'min:10', 'max:3000']]);
        Mail::to('sales2@mugdiinvestments.com')->send(new NewEnquiry($d));

        return back()->with('success', 'Thank you. Your enquiry has been sent to our team.');
    }
}
