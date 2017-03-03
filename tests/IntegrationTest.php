<?php

namespace NerdsAndCompany\CssToInlineStyles\Twig;

/**
 * Inline Css extension integration test.
 *
 * @author    Nerds & Company
 * @copyright Copyright (c) 2017, Nerds & Company
 * @license   MIT
 *
 * @see      http://www.nerds.company
 */
class InlineCssIntegrationTest extends \Twig_Test_IntegrationTestCase
{
    /**
     * {@inheritdoc}
     */
    public function getExtensions()
    {
        return [new InlineCssExtension()];
    }

    /**
     * {@inheritdoc}
     */
    public function getFixturesDir()
    {
        return dirname(__FILE__).'/fixtures/';
    }
}
