<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function showClientContact()
    {
        $contacts = Contact::all(); // Mengambil semua data kontak
        return view('contacts.contact', compact('contacts'));
    }


    public function index()
    {
        $contacts = Contact::all();
        $canAddContact = $contacts->isEmpty();
        return view('contacts.index', compact('contacts', 'canAddContact'));
    }

    public function create()
    {
        $contactExists = Contact::exists();
        if ($contactExists) {
            return redirect()->route('contacts.index')->with('error', 'Data kontak sudah ada. Anda hanya dapat mengeditnya.');
        }
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'telepon' => 'required|string|max:255',
            'email' => 'required|email',
            'alamat' => 'required|string',
        ]);

        Contact::create($request->all());
        return redirect()->route('contacts.index')->with('success', 'Berhasil menambahkan informasi kontak baru');
    }

    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'telepon' => 'required|string|max:255',
            'email' => 'required|email',
            'alamat' => 'required|string',
        ]);

        $contact->update($request->all());
        return redirect()->route('contacts.index')->with('success', 'Berhasil melakukan edit pada informasi kontak');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Berhasil menghapus informasi kontak');
    }
}
