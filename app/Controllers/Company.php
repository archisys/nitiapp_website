<?php

namespace App\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Company extends BaseController
{
    public function about(): string
    {
        return view('company/about');
    }

    public function blog(): string
    {
        return view('company/blog');
    }

    public function contact(): string
    {
        return view('company/contact');
    }

    public function contactsubmit()  {
        helper(['form']);

        $validation = \Config\Services::validation();

        $validation->setRules([
            'first_name' => 'required|min_length[3]',
            'last_name' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'contact_number' => 'required|min_length[10]',
            'solution' => 'required',
            'message' => 'required|min_length[5]'
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->to('/company/contact')->withInput()->with('errors', $validation->getErrors());
        }

        $contactModel = new ContactModel();

        $contactModel->save([
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'email' => $this->request->getPost('email'),
            'contact_number' => $this->request->getPost('contact_number'),
            'solution' => $this->request->getPost('solution'),
            'message' => $this->request->getPost('message'),
        ]);

        return redirect()->to('/company/contact')->with('success', 'Your request has been submitted successfully!');
    }

    public function privacypolicy(): string
    {
        return view('company/privacypolicy');
    }

    public function termsandcondition(): string
    {
        return view('company/termsandcondition');
    }
    
}
