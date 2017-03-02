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
        $compiler->addDebugInfo($this)
                 ->write('$cssPath = ')
                 ->subcompile($this->getAttribute('css'))
                 ->write(";\n")
                 ->write('if(!file_exists($cssPath)){ throw new InvalidArgumentException(\'Given file could not be found: \'.$cssPath); }'."\n")
                 ->write('$css = \'"\'.addslashes(file_get_contents($cssPath)).\'"\';'."\n")
                 ->write("ob_start();\n")
                 ->subcompile($this->getNode('body'))
                 ->write('echo $context["inlinecss"]->convert(ob_get_clean(), $css);'."\n")
        ;
    }
}
