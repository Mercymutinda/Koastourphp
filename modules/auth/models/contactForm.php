<?php

namespace auth\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $phone; 
    public $eventSelection; 
    public $subject;
    public $body;

    public function rules()
    {
        return [
            // Only name and email are strictly required for BOTH forms
            [['name', 'email'], 'required'],
            ['email', 'email'],
            // Phone, subject, and body are safe strings but not globally required
            [['phone', 'subject', 'body'], 'string'],
            // eventSelection is safe (can be an array or null)
            ['eventSelection', 'safe'], 
        ];
    }

    public function contact($email)
    {
        if ($this->validate()) {
            
            // Determine the email body based on which form was submitted
            if (!empty($this->eventSelection)) {
                // It's an Event Registration
                $messageBody = "New Event Registration Details:\n\n";
                $messageBody .= "Name: {$this->name}\n";
                $messageBody .= "Email: {$this->email}\n";
                $messageBody .= "Phone: {$this->phone}\n";
                $messageBody .= "Selected Events: " . implode(', ', (array)$this->eventSelection);
            } else {
                // It's a standard Contact Us submission
                $messageBody = "New Message from Website Contact Form:\n\n";
                $messageBody .= "Name: {$this->name}\n";
                $messageBody .= "Email: {$this->email}\n";
                $messageBody .= "Subject: {$this->subject}\n\n";
                $messageBody .= "Message:\n{$this->body}";
            }

            // Send the email
            Yii::$app->mailer->compose()
                ->setTo($email) 
                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                ->setReplyTo([$this->email => $this->name])
                ->setSubject($this->subject ? $this->subject : 'Website Inquiry')
                ->setTextBody($messageBody)
                ->send();
                
            return true;
        }
        return false;
    }
}