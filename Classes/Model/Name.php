<?php
namespace ChristianEssl\OtterNameBuilder\Model;

/**
 * The name object
 */
class Name implements NameInterface
{
    /**
     * @var string
     */
    protected $prefix;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $middleName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var string
     */
    protected $suffix;

    /**
     * Name constructor.
     *
     * @param string $prefix
     * @param string $firstName
     * @param string $middleName
     * @param string $lastName
     * @param string $suffix
     */
    public function __construct(string $prefix, string $firstName, string $middleName, string $lastName, string $suffix)
    {
        $this->prefix = $prefix;
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
        $this->suffix = $suffix;
    }

    /**
     * @return string
     */
    public function getPrefix(): string
    {
        return $this->prefix;
    }

    /**
     * @param string $prefix
     */
    public function setPrefix(string $prefix): void
    {
        $this->prefix = $prefix;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getMiddleName(): string
    {
        return $this->middleName;
    }

    /**
     * @param string $middleName
     */
    public function setMiddleName(string $middleName): void
    {
        $this->middleName = $middleName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getSuffix(): string
    {
        return $this->suffix;
    }

    /**
     * @param string $suffix
     */
    public function setSuffix(string $suffix): void
    {
        $this->suffix = $suffix;
    }

    /**
     * @return string
     */
    public function getFullName() : string
    {
        $fullName = '';
        $this->addNamePart($fullName, $this->prefix);
        $this->addNamePart($fullName, $this->firstName);
        $this->addNamePart($fullName, $this->middleName);
        $this->addNamePart($fullName, $this->lastName);
        $this->addNamePart($fullName, $this->suffix);
        return $fullName;
    }

    /**
     * @param string $name
     * @param string $namePart
     */
    protected function addNamePart(string &$name, string $namePart) : void
    {
        if (strlen($name) > 0 && substr($name, -1) !== '') {
            $name .= ' ';
        }
        $name .= $namePart;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return $this->getFullName();
    }
}