<?php

namespace Faker\Provider;

class Person extends \Faker\Provider\Base
{
    protected static $formats = array(
        '{{firstName}} {{lastName}}',
    );

    protected static $firstName = array('John', 'Jane');

    protected static $lastName = array('Doe');

    /**
     * @example 'John Doe'
     */
    public function name()
    {
        $format = static::randomElement(static::$formats);

        return $this->generator->parse($format);
    }


	 /**
     * @example 'Bob' or 'Jane'
     */
	public static function firstName()
    {
    	if ((isset(static::$firstNameMale)) && (isset(static::$firstNameFemale))) {
        return static::randomElement(array_merge(static::$firstNameMale, static::$firstNameFemale));
      }
        return static::randomElement(static::$firstName);
    }

	 /**
     * @example 'Bob'
     */
	public static function firstNameMale()
    {
    	if (isset(static::$firstNameMale)) {
        return static::randomElement(static::$firstNameMale);
      }
        return static::randomElement(static::$firstName);
    }

	 /**
     * @example 'Jane'
     */
	public static function firstNameFemale()
    {
    	if (isset(static::$firstNameFemale)) {
        return static::randomElement(static::$firstNameFemale);
      }
        return static::randomElement(static::$firstName);
    }

    /**
     * @example 'Doe'
     */
    public static function lastName()
    {
        return static::randomElement(static::$lastName);
    }
}
