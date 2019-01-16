<?php declare(strict_types=1);

namespace Shopware\Core\Framework\Test\Snippet\_fixtures\testGetLanguageFilesByIso;

use Shopware\Core\Framework\Snippet\Files\LanguageFileInterface;

class de_AT_e1 implements LanguageFileInterface
{
    public function getName(): string
    {
        return 'de_at_e1';
    }

    public function getPath(): string
    {
        return __DIR__ . '/de_at_e1.json';
    }

    public function getIso(): string
    {
        return 'de_AT';
    }

    public function isBase(): bool
    {
        return $this::BASE_LANGUAGE_FILE;
    }
}
