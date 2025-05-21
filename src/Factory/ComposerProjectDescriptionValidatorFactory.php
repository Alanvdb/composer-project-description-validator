<?php declare(strict_types=1);

namespace AlanVdb\Composer\Factory;

use AlanVdb\Validator\Definition\ValidatorInterface;
use AlanVdb\Composer\Definition\ComposerProjectDescriptionValidatorFactoryInterface;
use AlanVdb\Composer\ComposerProjectDescriptionValidator;

class ComposerProjectDescriptionValidatorFactory implements ComposerProjectDescriptionValidatorFactoryInterface
{
    public function create() : ValidatorInterface
    {
        return new ComposerProjectDescriptionValidator();
    }
}
