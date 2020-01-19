<?php

namespace Modules\Notifier\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ExceptionOccured extends Mailable
{
    use Queueable, SerializesModels;

    private $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $emailsTo = str_getcsv(config('notifier.to'), ',');
        $ccEmails = str_getcsv(config('notifier.cc'), ',');
        $bccEmails = str_getcsv(config('notifier.bcc'), ',');

        if ($emailsTo[0] == null) {
            $emailsTo = config('notifier.to');
        }

        if ($ccEmails[0] == null) {
            $ccEmails = config('notifier.cc');
        }

        if ($bccEmails[0] == null) {
            $bccEmails = config('notifier.bcc');
        }

        $fromSender = config('notifier.from');
        $subject = config('notifier.subject');

        return $this->from($fromSender)
                    ->to($emailsTo)
                    // ->cc($ccEmails)
                    // ->bcc($bccEmails)
                    ->subject($subject)
                    ->view(config('notifier.view'))
                    ->with('content', $this->content);
    }
}
