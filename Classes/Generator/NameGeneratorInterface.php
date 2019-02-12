<?php
namespace ChristianEssl\OtterNameBuilder\Generator;

/**
 * NameGeneratorInterface
 */
interface NameGeneratorInterface
{
    /**
     * NameGeneratorInterface constructor.
     *
     * @param string[] $names
     * @param int $minLength;
     * @param int $maxLength
     */
    public function __construct(array $names, int $minLength, int $maxLength);

    /**
     * @return string
     */
    public function generateName() : string;

    /**
     * @param int $count
     *
     * @return string[]
     */
    public function generateNames(int $count) : array;
}