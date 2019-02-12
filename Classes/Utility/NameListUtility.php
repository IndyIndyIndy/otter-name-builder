<?php
namespace ChristianEssl\OtterNameBuilder\Utility;

use ChristianEssl\OtterNameBuilder\Exception\MissingNameListException;

/**
 * Returns the names array from a given txt file
 */
class NameListUtility
{
    /**
     * @param string $fileName
     *
     * @return string[]
     * @throws MissingNameListException
     */
   public static function getNameList($fileName) : array
   {
       $list = file_get_contents(self::getResourcesDirectory() . $fileName);
       if (!is_string($list) || strlen($list) === 0) {
           throw new MissingNameListException($fileName . ' contains no names');
       }
       return explode("\n", $list);
   }

    /**
     * @return string
     */
   protected static function getResourcesDirectory() : string
   {
       return dirname($_SERVER['SCRIPT_FILENAME']) . '/Resources/';
   }
}