<?php

namespace NerdsAndCompany\CssToInlineStyles\Twig;

use Twig_Compiler;
use Twig_Node;

/**
 * Inline css node adds coversion of css to inline style for given node.
 *
 * @author    Nerds & Company
 * @copyright Copyright (c) 2017, Nerds & Company
 * @license   MIT
 *
 * @see      http://www.nerds.company
 */
class InlineCssNode extends Twig_Node
{
    /**
     * {@inheritdoc}
     */
    public function compile(Twig_Compiler $compiler)
    {
        $css = '"'.addslashes(file_get_contents($this->getAttribute('css'))).'"';

        $compiler->addDebugInfo($this)
            ->write("ob_start();\n")
            ->subcompile($this->getNode('body'))
            ->write(sprintf('echo $context["inlinecss"]->convert(ob_get_clean(), %s);'."\n", $css))
        ;
    }
}
