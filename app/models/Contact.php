<?php

define('IFS_MAILCHIMP_ALL_CONTACT_LIST', '4e7e5d760c');

class Contact extends Eloquent {
    
    public $table = 'contacts';
    
    protected $fillable = array('name', 'email', 'phone', 'subject', 'body');
      
    public static function validate()
    {
      $data = Input::all();
      $rules = array(
        'g-recaptcha-response' => 'required|recaptcha',
      );
      $messages = array(
        'g-recaptcha-response.required' => "Please prove you're a human by checking the 'I'm not a robot' checkbox",
        'g-recaptcha-response.recaptcha' => "Recaptcha verification failed. Try again please.",
      );
      return Validator::make($data, $rules, $messages);
    }

    public function handleNew()
    {
      Contact::create(array(
          'name' => Input::get('name'),
          'email' => Input::get('email'),
          'phone' => Input::get('phone'),
          'subject' => Input::get('subject'),
          'body' => Input::get('body'),
      ));
      $this->mailchimpSignup();
      $this->sendMessages();
    }

    private function mailchimpSignup()
    {
      if (Input::get('email_list_signup')) {
        try {
          MailchimpWrapper::lists()->subscribe(IFS_MAILCHIMP_ALL_CONTACT_LIST, array('email' => Input::get('email')));
        } catch (Exception $e) { }
      }
    }

    private function sendMessages()
    {
      Mail::send('emails.contact_submission', Input::all(), function($message)
      {
          $message->to(array('robertcharlesfox@gmail.com', 'robert@foxconsulting.tech'), 'Inner File Software')->subject(Input::get('subject'));
          $message->from('info@filemakerwebsite.com', 'FileMaker Website');
      });
      Mail::send('emails.contact_thankyou', Input::all(), function($message)
      {
          $message->to(Input::get('email'), Input::get('name'))->subject('Thanks for contacting FileMaker Website!');
          $message->from('info@filemakerwebsite.com', 'FileMaker Website');
      });
    }

}