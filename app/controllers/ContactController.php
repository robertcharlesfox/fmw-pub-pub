<?php

use Hugofirth\Mailchimp\Facades\MailchimpWrapper;

class ContactController extends BaseController {

    public function handlePost()
    {
        $contact = new Contact;
        $validator = $contact->validate();
        if ($validator->fails()) {
            return Redirect::to('contact')
                ->withInput()
                ->withErrors($validator);
        }
        else {
            $contact->handleNew();
            return View::make('pub.contact_response')
                ->with('input', Input::all())->with('message', 'Success!');
        }
    }

}
