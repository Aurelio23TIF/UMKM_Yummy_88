<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    // Aturan validasi
    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:5',
    ];

    public function send()
    {
        // Validasi data input
        $this->validate();

        try {
            // Kirim email
            Mail::send(
                'emails.contact', // View email yang akan dikirim
                [
                    'name' => $this->name,
                    'email' => $this->email,
                    'messageContent' => $this->message,
                ],
                function ($mail) {
                    $mail->to('ruben23ti@mahasiswa.pcr.ac.id') // Ganti dengan email admin Anda
                        ->subject('New Contact Us Message');
                }
            );

            // Kirim pesan sukses
            session()->flash('success', 'Pesan Anda berhasil dikirim!');
        } catch (\Exception $e) {
            // Tangani kesalahan saat pengiriman email
            session()->flash('error', 'Terjadi kesalahan saat mengirim pesan: ' . $e->getMessage());
        }

        // Reset nilai input setelah pengiriman
        $this->reset(['name', 'email', 'message']);
    }

    public function render()
    {
        // Gunakan layout Livewire dan kembalikan view
        return view('livewire.contact-form')
            ->layout('layouts.app'); // Pastikan layout sesuai dengan struktur Anda
    }
}
