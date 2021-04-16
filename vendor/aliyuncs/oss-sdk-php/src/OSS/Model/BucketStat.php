<?php

namespace OSS\Model;


/**
 * Bucket stat class.
 *
 * Class BucketStat
 * @package OSS\Model
 */
class BucketStat
{
    /**
     * Get storage
     *
     * @return int
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * Get object count
     *
     * @return int
     */
    public function getObjectCount()
    {
        return $this->objectCount;
    }

    /**
     * Get multipart upload count.
     *
     * @return int
     */
    public function getMultipartUploadCount()
    {
        return $this->multipartUploadCount;
    }

    /**
     * Parse stat from the xml.
     *
     * @param string $strXml
     * @throws OssException
     * @return null
     */
    public function parseFromXml($strXml)
    {
        $xml = simplexml_load_string($strXml);
        if (isset($xml->Storage) ) {
            $this->storage = intval($xml->Storage);
        }
        if (isset($xml->ObjectCount) ) {
            $this->objectCount = intval($xml->ObjectCount);
        }
        if (isset($xml->MultipartUploadCount) ) {
            $this->multipartUploadCount = intval($xml->MultipartUploadCount);
        }
    }
    
    /**
     * current storage
     *
     * @var int
     */
    private $storage;
    /**
     * object count
     *
     * @var int
     */
    private $objectCount;

    /**
     * multipart upload count
     *
     * @var int
     */
    private $multipartUploadCount;

}