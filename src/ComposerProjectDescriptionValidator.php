<?php declare(strict_types=1);

namespace AlanVdb\Composer;

use AlanVdb\Validator\Definition\ValidatorInterface;
use AlanVdb\Validator\AbstractValidator;

class ComposerProjectDescriptionValidator
    extends AbstractValidator
    implements ValidatorInterface
{
    
    public function __construct()
    {
        parent::__construct('');
    }

    public function isValid(mixed $description): bool
    {
        if (!is_string($description)) {
            $this->errorMessage = 'Project description must be a string';
        }
        if (strlen($description) > 200) {
            $this->errorMessage = 'Project description should be less than 200 characters';
        }
        if (preg_match('/[\x00-\x1F\x7F]/', $description)) {
            $this->errorMessage = 'Project description contains invalid characters';
        }
        return empty($this->errorMessage);
    }
}
