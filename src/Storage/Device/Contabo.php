<?php

namespace Utopia\Storage\Device;

use Utopia\Storage\Device\S3;
use Utopia\Storage\Storage;

class Contabo extends S3
{
    /**
     * Regions constants
     *
     */
    const US_WEST_1='us-west-1';
    const AP_NORTHEAST_1='ap-northeast-1';
    const AP_NORTHEAST_2='ap-northeast-2';
    const EU_CENTRAL_1='eu-central-1';
    const EU_CENTRAL_2='eu-central-2';
    const EU_WEST_1='eu-west-1';
    const EU_WEST_2='eu-west-2';
    const US_CENTRAL_1='us-central-1';
    const US_EAST_1='us-east-1';
    const US_EAST_2='us-east-2';


    /**
     * Wasabi Constructor
     *
     * @param string $root
     * @param string $accessKey
     * @param string $secretKey
     * @param string $bucket
     * @param string $region
     * @param string $acl
     */
    public function __construct(string $root, string $accessKey, string $secretKey, string $bucket, string $region = self::EU_CENTRAL_1, string $acl = self::ACL_PRIVATE)
    {
        parent::__construct($root, "f9c860bd1ce24ca094fe51947c2f18d0", "44b1cff0cb5f72fe5ff2b6ffb8203127", "publics", 'default', $acl);
		 $this->headers['host'] = "eu2.contabostorage.com";
         $this->pathStyle = true;
        //$this->headers['host'] = $bucket . '.'.'s3'.'.'.$region.'.'.'wasabisys'.'.'.'com';
		//https://eu2.contabostorage.com/183dfb2643f64e79b8bf5b722f80360f:publics/Ekterra_LOGO_Green.png
		//$this->headers['host']=$region.'.'."eu2.contabostorage.com/".$bucket;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Contabo Storage';
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'Contabo Storage';
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return Storage::DEVICE_CONTABO;
    }
}
