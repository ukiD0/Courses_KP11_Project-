<?php

class __Mustache_ff98e411abd603f2565952b8c6cb3af6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="displaytemplate">
';
        $buffer .= $indent . '        <h3 data-region="displaytemplateheader">';
        $value = $context->find('str');
        $buffer .= $this->section2d168d34417560efc7d08105b017ef35($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '            <h4>';
        $value = $context->find('str');
        $buffer .= $this->sectionF7c48ab4044fcf7033cd6ba8104b1313($context, $indent, $value);
        $buffer .= '</h4>
';
        $buffer .= $indent . '            <div data-region="displaytemplateexample">
';
        $buffer .= $indent . '                -
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '            <h4>';
        $value = $context->find('str');
        $buffer .= $this->sectionF67be5dfd2b12f524c14dfa638e8908f($context, $indent, $value);
        $buffer .= '</h4>
';
        $buffer .= $indent . '            <pre data-region="displaytemplatesource"> - </pre>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section2d168d34417560efc7d08105b017ef35(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'notemplateselected, tool_templatelibrary';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'notemplateselected, tool_templatelibrary';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF7c48ab4044fcf7033cd6ba8104b1313(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'example, tool_templatelibrary';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'example, tool_templatelibrary';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF67be5dfd2b12f524c14dfa638e8908f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'documentation, tool_templatelibrary';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'documentation, tool_templatelibrary';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
