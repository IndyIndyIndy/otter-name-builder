<?php
namespace ChristianEssl\OtterNameBuilder\Builder;

use ChristianEssl\OtterNameBuilder\Generator\NameGeneratorInterface;
use ChristianEssl\OtterNameBuilder\Model\Name;

/**
 * Generates otter names with a one third chance for a middle name
 */
class OtterNameBuilder
{
    /**
     * @var NameGeneratorInterface
     */
    protected $firstNameGenerator;

    /**
     * @var NameGeneratorInterface
     */
    protected $middleNameGenerator;

    /**
     * @var NameGeneratorInterface
     */
    protected $lastNameGenerator;

    /**
     * OtterNameBuilder constructor.
     *
     * @param NameGeneratorInterface $firstNameGenerator
     * @param NameGeneratorInterface $middleNameGenerator
     * @param NameGeneratorInterface $lastNameGenerator
     */
    public function __construct(
        NameGeneratorInterface $firstNameGenerator,
        NameGeneratorInterface $middleNameGenerator,
        NameGeneratorInterface $lastNameGenerator
    )
    {
        $this->firstNameGenerator = $firstNameGenerator;
        $this->middleNameGenerator =$middleNameGenerator;
        $this->lastNameGenerator = $lastNameGenerator;
    }

    /**
     * @return Name
     */
    public function getName()
    {
        $firstName = $this->firstNameGenerator->generateName();
        $middleName = "";
        $lastName = $this->lastNameGenerator->generateName();

        // every third otter gets a middle name!
        if (rand(0, 2) === 0)  {
            $middleName = $this->middleNameGenerator->generateName();
        }

        return new Name(
            "",
            $firstName,
            $middleName,
            $lastName,
            ""
        );
    }
}