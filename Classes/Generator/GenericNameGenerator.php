<?php
namespace ChristianEssl\OtterNameBuilder\Generator;

use ChristianEssl\OtterNameBuilder\Exception\InvalidNameListException;

/**
 * Gets a random name from a list matching the requirements
 */
class GenericNameGenerator implements NameGeneratorInterface
{
    /**
     * @var string[]
     */
    protected $names;

    /**
     * @var int
     */
    protected $minLength;

    /**
     * @var int
     */
    protected $maxLength;

    /**
     * NameGeneratorInterface constructor.
     *
     * @param string[] $names
     * @param int $minLength;
     * @param int $maxLength
     *
     * @throws InvalidNameListException
     */
    public function __construct(array $names, int $minLength, int $maxLength)
    {
        $this->names = $names;
        $this->minLength = $minLength;
        $this->maxLength = $maxLength;

        if (!$this->namesFulfillLengthRequirements()) {
            throw new InvalidNameListException(
                'The name list does not contain a single name that fulfills the min/max length requirements.'
            );
        }
    }

    /**
     * @return string
     */
    public function generateName() : string
    {
        $index = rand(0, count($this->names) -1);
        $name = trim($this->names[$index]);

        if (strlen($name) < $this->minLength || strlen($name) > $this->maxLength)
        {
            return $this->generateName();
        }

        return ucfirst($name);
    }

    /**
     * @param int $count
     *
     * @return string[]
     */
    public function generateNames(int $count) : array
    {
        $generatedNames = [];

        while (count($generatedNames) < $count) {
            $name = $this->generateName();
            $generatedNames[] = $name;
        }

        return $generatedNames;
    }

    /**
     * @return bool
     */
    protected function namesFulfillLengthRequirements() : bool
    {
        foreach($this->names as $name) {
            $name = trim($name);
            if (strlen($name) >= $this->minLength &&
                strlen($name) <= $this->maxLength) {
                return true;
            }
        }
        return false;
    }
}