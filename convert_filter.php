<?php
class convert_filter extends php_user_filter
{
    private $data;
    function onCreate()
    {
        $this->data = "";
        return true;
    }

    function filter($in, $out, &$consumed, $closing)
    {
        while ($bucket = stream_bucket_make_writeable($in)) {
            $bucket->data = str_replace("example", 'gmail', $bucket->data, $i);
            $consumed += $bucket->datalen;
            stream_bucket_append($out, $bucket);
        }
        
        return PSFS_PASS_ON;
    }
}
