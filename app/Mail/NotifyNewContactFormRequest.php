<?php

namespace App\Mail;

use App\Http\Resources\ContactFormRequestResource;
use App\Models\ContactFormRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

/**
 * Class NotifyNewContactFormRequest
 * @package App\Mail
 */
class NotifyNewContactFormRequest extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(private readonly ContactFormRequest $contactFormRequest)
    {
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Form Request',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-form-request',
            with: ['data' => ContactFormRequestResource::make($this->contactFormRequest)->resolve()]
        );
    }
}
