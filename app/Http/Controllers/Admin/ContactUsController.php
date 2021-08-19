<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Constants;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contacts = ContactUs::orderBy('created_at', 'desc')
        ->paginate(Constants::$DEFAULT_PAGINATION_COUNT);
        $total_contacts = ContactUs::count();
        return view('admin.contacts.index',compact('contacts'));
    }

    public function create()
    {
        return view('admin.contacts.create');
    }

    public function store(Request $request)
    {
        // $request->validate(ContactUs::$validation);
        $contact = new ContactUs;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        Alert::success('Pemesanan Berhasile', 'Success Message');

        return redirect()->back();

    }


    public function show($id)
    {
        $contact = ContactUs::findOrFail($id);
        return view('admin.contacts.show', compact('contact'));
    }

    public function edit($id)
    {
        $contact = ContactUs::findOrFail($id);
        return view('admin.contacts.edit',compact('contact'));
    }

    public function update($id, Request $request)
    {
        // $request->validate(ContactUs::$validationUpdate);
        $contact = ContactUs::findOrFail($id);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;


        $contact->save();

        return redirect('contact')->with('status', 'ContactUs updated');
    }


    public function destroy(ContactUs $contact)
    {
        ContactUs::destroy($contact->id);
        Alert::toast('Data berhasil di hapus','success');
        return redirect('contact')->with('status', 'ContactUs deleted');


    }
}
