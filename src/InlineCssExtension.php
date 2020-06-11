<?php

namespace NerdsAndCompany\CssToInlineStyles\Twig;

use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;
use TijsVerkoyen\CssToInlineStyles\CssToInlineStyles;

/**
 * Inline Css extension to convert css to inline styles.
 *
 * @author    Nerds & Company
 * @copyright Copyright (c) 2017, Nerds & Company
 * @license   MIT
 *
 * @see      http://www.nerds.company
 */
class InlineCssExtension extends AbstractExtension implements GlobalsInterface
{
    /**
     * {@inheritdoc}
     */
    public function getTokenParsers()
    {
        return  [new InlineCssParser()];
    }

    /**
     * {@inheritdoc}
     */
    public function getGlobals(): array
    {
        return ['inlinecss' => new CssToInlineStyles()];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'inlinecss';
    }
}
