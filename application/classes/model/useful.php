<?php defined('SYSPATH') or die('No direct script access.');

class Model_Useful
{

        public function sendemail($to, $from, $subject, $message, $html)
        {
                try
                {
                        $count = Email::send($to, $from, $subject, $message, $html);
                        return TRUE;
                }
                catch (Exception $e)
                {
                        echo $e->getMessage();
                        return FALSE;
                }
        }
}
