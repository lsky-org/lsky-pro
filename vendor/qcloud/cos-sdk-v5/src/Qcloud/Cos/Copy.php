<?php

namespace Qcloud\Cos;

use Guzzle\Http\ReadLimitEntityBody;

class Copy {
    /**
     * const var: part size from 5MB to 5GB, and max parts of 10000 are allowed for each upload.
     */
    const MIN_PART_SIZE = 52428800 ;
    const MAX_PART_SIZE = 5368709120;
    const MAX_PARTS     = 10000;

    private $client;
    private $source;
    private $options;
    private $partSize;
    private $size;

    public function __construct($client, $contentlength, $source, $minPartSize, $options = array()) {
        $this->client = $client;
        $this->source = $source;
        $this->options = $options;
        $this->size = $contentlength;
        $this->partSize = $this->calculatePartSize($minPartSize);
    }

    public function performUploading() {

        $commands = array();



        $uploadId = $this->initiateMultipartUpload();
        $offset = 0;
        $partNumber = 1;
        $partSize = $this->partSize;
        $parts = array();
        for (;;) {

            if ($offset + $partSize  >= $this->size)
            {
                $partSize = $this->size - $offset -1;
            }
            //echo ('bytes='.( 'bytes='.((string)$offset).'-'.(string)($offset+$partSize)));
            $commands[] = $this->client->getCommand('UploadPartCopy', array(
                'Bucket' => $this->options['Bucket'],
                'Key' => $this->options['Key'],
                'UploadId' => $uploadId,
                'PartNumber' => $partNumber,
                'CopySource'=> $this->source,
                'CopySourceRange' => 'bytes='.((string)$offset).'-'.(string)($offset+$partSize),
            ));
            ++$partNumber;
            $offset += $partSize;
            if ($this->size == $offset+1)
            {
                break;
            }
        }
        $this->client->execute($commands);


        $partNumber = 1;
        $rt = $this->client->listParts(array(
            'Bucket' => $this->options['Bucket'],
            'Key' => $this->options['Key'],
            'UploadId' => $uploadId));
        foreach ($rt['Parts'] as $part) {

            $part = array('PartNumber' => $partNumber, 'ETag' => $part['ETag']);
            array_push($parts, $part);
            $partNumber++;
        }

        return $this->client->completeMultipartUpload(array(
                    'Bucket' => $this->options['Bucket'],
                    'Key' => $this->options['Key'],
                    'UploadId' => $uploadId,
                    'Parts' => $parts));
    }

    private function calculatePartSize($minPartSize)
    {
        $partSize = intval(ceil(($this->size / self::MAX_PARTS)));
        $partSize = max($minPartSize, $partSize);
        $partSize = min($partSize, self::MAX_PART_SIZE);
        $partSize = max($partSize, self::MIN_PART_SIZE);

        return $partSize;
    }

    private function initiateMultipartUpload() {
        $result = $this->client->createMultipartUpload($this->options);
        return $result['UploadId'];
    }
}
