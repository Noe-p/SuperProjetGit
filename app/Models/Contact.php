<?php

namespace App\Models;

use App\Http\Requests\ContactRequest;
use Illuminate\Database\Eloquent\Model;
use Mailjet\LaravelMailjet\Facades\Mailjet;
use Mailjet\Resources;

class Contact extends Model
{
    /**
     * @var string
     */
    protected $table = 'contacts';

    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array fillable
     */
    protected $fillable = [
        'id', 'ds_name', 'firstname', 'lastname', 'email', 'phone', 'nb_vehicle'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];


    /**
     *  Création d'un contact via ContactRequest
     *
     * @param ContactRequest $request
     * @return $this
     */
    public function createContact(ContactRequest $request) : Contact {
        $this->ds_name = $request['ds_name'];
        $this->firstname = $request['firstname'];
        $this->lastname = $request['lastname'];
        $this->email = $request['email'];
        $this->phone = $request['phone'];
        $this->nb_vehicle = $request['nb_vehicle'];
        return $this;
    }

    /**
     *  Envoi d'un mail du coter de smartmoov ou l'assurance contenant les informations que le client à transmis pour un devis
     **/
    public function sendMailBack($contact){
        $mj = Mailjet::getClient();
        $body = [
            'FromEmail' => "stephane.pau@smartmoov.solutions",
            'FromName' => "????????",
            'Subject' => "Nouvelle demande d'information pour un devis",
            'MJ-TemplateLanguage' => true,
            'Html-part' => "<h2 style='text-align: center'>Un nouveau client souhaite des informations concernant l'assurance !</h2><br />Voici les informations fournies par le client : <br><br> <b>Nom de l'auto-école : </b> $contact->ds_name<br><b>Prénom : </b> $contact->firstname<br><b>Nom : </b>$contact->lastname<br><b>Email : </b>$contact->email<br><b>Numéro de téléphone : </b>$contact->phone<br><b>Nombre de véhicule : </b>$contact->nb_vehicle ",
            'Recipients' => [
                ['Email' => "?????"],
            ]
        ];
        $response =  $mj->post(Resources::$Email, ['body' => $body]);
        $response->success() && var_dump($response->getData());
    }

    /**
     *  Envoi d'un mail au client pour comfirmer l'envoie de ses informations
     **/
    public function sendMailClient($contact){
        $mj = Mailjet::getClient();
        $body = [
            'FromEmail' => "stephane.pau@smartmoov.solutions",
            'FromName' => "????????",
            'Subject' => "Votre demande à bien été transmise",
            'MJ-TemplateLanguage' => true,
            "MJ-TemplateID" => '1516321',
            'Recipients' => [
                ['Email' => "$contact->email", 'Name' => $contact->name]
            ]
        ];
        $response =  $mj->post(Resources::$Email, ['body' => $body]);
        $response->success() && var_dump($response->getData());
    }


}