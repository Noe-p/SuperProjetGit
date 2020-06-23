<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Throwable;

class IndexController {

    private $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }


    public function showIndex(){
        return view('index');
    }

    public function formContact(ContactRequest $request){
        $contact = $this->contact->createContact($request);
        try {
            $contact->save();
//            $this->contact->sendMailBack($contact);
            $this->contact->sendMailClient($contact);
            return back()->with(['success' => 'Merci ! Vous allez bientôt recevoir un mail de confirmation concernant la transmission de vos informations.']);

        } catch (Throwable $e) {
            report($e);
            return back()->with(['error' => 'Erreur ! Il y a eu une erreur lors de l\'envoi de vos informations. Veuillez réessayer ultérieurement.']);
        }

    }
}
