<?php
/**
 * Path to My Library
 */
//  define('XHLIBRARY_PATH', dirname(__FILE__) . DS . 'xhlibrary');

  /**
  * My file importer. Uses dot separators to define namespaces.
  *
  * @param string $path Path to file to import
  * @return boolean
  */
  function myimport($path) {
      return JLoader::import($path, JPATH_PLUGINS . DS . 'mygroup');
  }

    
?>


