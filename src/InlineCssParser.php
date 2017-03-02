<?php

namespace NerdsAndCompany\CssToInlineStyles\Twig;

use Twig_TokenParser;
use Twig_Token;

/**
 * Parses twig node between inlinecss and endinlinecss.
 *
 * @author    Nerds & Company
 * @copyright Copyright (c) 2017, Nerds & Company
 * @license   MIT
 *
 * @see      http://www.nerds.company
 */
class InlineCssParser extends Twig_TokenParser
{
    /**
     * {@inheritdoc}
     */
    public function parse(Twig_Token $token)
    {
        $lineNo = $token->getLine();
        $stream = $this->parser->getStream();
        $path = $this->parser->getExpressionParser()->parseMultitargetExpression();

        $stream->expect(Twig_Token::BLOCK_END_TYPE);
        $body = $this->parser->subparse(array($this, 'decideEnd'), true);
        $stream->expect(Twig_Token::BLOCK_END_TYPE);

        return new InlineCssNode(['body' => $body], ['css' => $path], $lineNo, $this->getTag());
    }

    /**
     * {@inheritdoc}
     */
    public function getTag()
    {
        return 'inlinecss';
    }

    /**
     * Node ends when endinlinecss tag has been reached.
     *
     * @param Twig_Token $token
     */
    public function decideEnd(Twig_Token $token)
    {
        return $token->test('endinlinecss');
    }
}
