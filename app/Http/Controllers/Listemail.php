<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\EmailSend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Listemail extends Controller
{
    public function sendmail(){

        try {
            $emails = EmailSend::where('enviado', '=', 'nao')->get();

            foreach ($emails as $mail) {

                $dataValue = json_decode($mail->value, true);

                if($mail->type == 'contato') {
                    if(isset($dataValue['email'])) {
                        $dataEmail = [
                            'email' => $mail->email,
                            'nome' => $mail->nome,
                            'subject' => $mail->assunto,
                            'dataValue' => $dataValue
                        ];

                        Mail::to($mail->email)->send(new Sendmail($dataEmail, 'emails.'.$mail->type));

                        EmailSend::where('id', '=', $mail->id)->update(['enviado' => 'sim']);
                    }
                } else {
                    $dataEmail = [
                        'email' => $mail->email,
                        'nome' => $mail->nome,
                        'subject' => $mail->assunto,
                        'dataValue' => $dataValue
                    ];

                    Mail::to($mail->email)->send(new Sendmail($dataEmail, 'emails.'.$mail->type));

                    EmailSend::where('id', '=', $mail->id)->update(['enviado' => 'sim']);
                }
            }

            return true;
        } catch (e $exception) {
            return $exception->getMessage();
        }

    }
}
