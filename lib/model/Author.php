<?php



/**
 * Skeleton subclass for representing a row from the 'author' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.6-dev on:
 *
 * 06/19/12 17:55:38
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class Author extends BaseAuthor {

  public function __toString(){
    return $this->first_name.' '.$this->last_name;
  }

} // Author
