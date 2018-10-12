<?php
namespace Upyun;

class Util
{
    public static function trim($str)
    {
        if (is_array($str)) {
            return array_map(array('Util', 'trim'), $str);
        } else {
            return trim($str);
        }
    }

    public static function getHeaderParams($headers, $otherParams = array())
    {
        $params = [];
        $otherParams = array_map('strtolower', $otherParams);
        foreach ($headers as $header => $value) {
            $header = strtolower($header);
            if (strpos($header, 'x-upyun-') !== false) {
                $params[$header] = $value[0];
            } else if (in_array($header, $otherParams)) {
                $params[$header] = $value[0];
            }
        }
        return $params;
    }

    public static function parseDir($body)
    {
        $files = array();
        if (!$body) {
            return array();
        }

        $lines = explode("\n", $body);
        foreach ($lines as $line) {
            $file = [];
            list($file['name'], $file['type'], $file['size'], $file['time']) = explode("\t", $line, 4);
            $files[] = $file;
        }

        return $files;
    }

    public static function base64Json($params)
    {
        return base64_encode(json_encode($params, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
    }

    public static function stringifyHeaders($headers)
    {
        $return = array();
        foreach ($headers as $key => $value) {
            $return[] = "$key: $value";
        }
        return $return;
    }

    public static function md5Hash($resource)
    {
        rewind($resource);
        $ctx = hash_init('md5');
        hash_update_stream($ctx, $resource);
        $md5 = hash_final($ctx);
        return $md5;
    }

    /**
     * GuzzleHttp\Psr\Uri use `parse_url`，not good for utf-8,
     * So should `encodeURI` first, before `new Psr7\Request`
     * @see http://stackoverflow.com/questions/4929584/encodeuri-in-php
     */
    public static function encodeURI($url)
    {
        $unescaped = array(
            '%2D'=>'-','%5F'=>'_','%2E'=>'.','%21'=>'!', '%7E'=>'~',
            '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')'
        );
        $reserved = array(
            '%3B'=>';','%2C'=>',','%2F'=>'/','%3F'=>'?','%3A'=>':',
            '%40'=>'@','%26'=>'&','%3D'=>'=','%2B'=>'+','%24'=>'$'
        );
        $score = array(
            '%23'=>'#'
        );
        return strtr(rawurlencode($url), array_merge($reserved, $unescaped, $score));
    }
}
