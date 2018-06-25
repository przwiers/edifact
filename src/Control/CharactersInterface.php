<?php

namespace Metroplex\Edifact\Control;

/**
 * Handle the control characters used in EDI messages.
 */
interface CharactersInterface
{
    /**
     * Set the control character used to separate components.
     *
     * @param string $character The character to use
     *
     * @return CharactersInterface
     */
    public function withComponentSeparator(string $character): CharactersInterface;


    /**
     * Get the control character used to separate components.
     *
     * @return string
     */
    public function getComponentSeparator(): string;


    /**
     * Set the control character used to separate data elements.
     *
     * @param string $character The character to use
     *
     * @return CharactersInterface
     */
    public function withDataSeparator(string $character): CharactersInterface;


    /**
     * Get the control character used to separate data elements.
     *
     * @return string
     */
    public function getDataSeparator(): string;


    /**
     * Set the control character used as a decimal point.
     *
     * @param string $character The character to use
     *
     * @return CharactersInterface
     */
    public function withDecimalPoint(string $character): CharactersInterface;


    /**
     * Get the control character used as a decimal point.
     *
     * @return string
     */
    public function getDecimalPoint(): string;


    /**
     * Set the control character used as an escape character.
     *
     * @param string $character The character to use
     *
     * @return CharactersInterface
     */
    public function withEscapeCharacter(string $character): CharactersInterface;


    /**
     * Get the control character used as an escape character.
     *
     * @return string
     */
    public function getEscapeCharacter(): string;


    /**
     * Set the control character used as an segment terminator.
     *
     * @param string $character The character to use
     *
     * @return CharactersInterface
     */
    public function withSegmentTerminator(string $character): CharactersInterface;


    /**
     * Get the control character used as an segment terminator.
     *
     * @return string
     */
    public function getSegmentTerminator(): string;


    /**
     * Set the control character used as the reserved space.
     *
     * @param string $character The character to use
     *
     * @return CharactersInterface
     */
    public function withReservedSpace(string $character): CharactersInterface;


    /**
     * Get the control character used as an the reserved space.
     *
     * @return string
     */
    public function getReservedSpace(): string;
}
