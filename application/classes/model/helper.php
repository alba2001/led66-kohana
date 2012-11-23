<?php defined('SYSPATH') or die('No direct script access.');

class Model_Helper
{

    public function send_email($to, $from, $subject, $message, $html)
    {
        try
        {
                Email::send($to, $from, $subject, $message, $html);
            return TRUE;
        }
        catch (Exception $e)
        {
                echo $e->getMessage();
                return FALSE;
        }
    }
}
