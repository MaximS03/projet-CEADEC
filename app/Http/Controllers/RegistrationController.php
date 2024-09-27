<?php
//
//namespace App\Http\Controllers;
//
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Mail;
//use App\Models\Formation;
//
//class RegistrationController extends Controller
//{
//    public function showForm()
//    {
//        $formations = Formation::all();
//        return view('formation', compact('formations'));
//    }
//
//    public function register(Request $request)
//    {
//        $request->validate([
//            'name' => 'required|string|max:255',
//            'email' => 'required|email|max:255',
//            'formation' => 'required|exists:formations,id',
//        ]);
//
//        Mail::send('emails.registration-success', ['data' => $request->all()], function($message) use ($request) {
//            $message->to('mamx1404@gmail.com');
//            $message->subject('Nouvelle inscription réussie');
//        });
//
//        return response()->json(['message' => 'Inscription réussie']);
//    }
//}
//
