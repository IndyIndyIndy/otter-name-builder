<?php
namespace ChristianEssl\OtterNameBuilder\Model;

/**
 * Name
 */
interface NameInterface
{
    /**
     * Name constructor.
     *
     * @param string $prefix
     * @param string $firstName
     * @param string $middleName
     * @param string $lastName
     * @param string $suffix
     */
    public function __construct(string $prefix, string $firstName, string $middleName, string $lastName, string $suffix);

    /**
     * @return string
     */
    public function getPrefix();

    /**
     * @param string $prefix
     */
    public function setPrefix(string $prefix);

    /**
     * @return string
     */
    public function getFirstName();

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName);
    /**
     * @return string
     */
    public function getMiddleName();

    /**
     * @param string $middleName
     */
    public function setMiddleName(string $middleName);

    /**
     * @return string
     */
    public function getLastName();

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName);
    /**
     * @return string
     */
    public function getSuffix();

    /**
     * @param string $suffix
     */
    public function setSuffix(string $suffix);

    /**
     * @return string
     */
    public function getFullName();

    /**
     * @return string
     */
    public function __toString();
}