<?php

class __Mustache_918bea8d6b2a5cca08836737d952bf33 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<footer id="page-footer">
';
        $buffer .= $indent . '    <div class="moove-container-fluid footer-columns">
';
        $buffer .= $indent . '        <div class="row">
';
        $buffer .= $indent . '            <div class="col-md-4 column-left">
';
        $buffer .= $indent . '                <div class="contact">
';
        $buffer .= $indent . '                    <h3 class="footer-title">';
        $value = $context->find('str');
        $buffer .= $this->sectionC383ddc1425fec8af2979220a8f6608a($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '                        By Проектная группа ИСиП-25
';
        $buffer .= $indent . '                    <ul>
';
        $value = $context->find('website');
        $buffer .= $this->section49cb9ffc6a19cf5452cafda6a14037b0($context, $indent, $value);
        $value = $context->find('mobile');
        $buffer .= $this->sectionD2dcf55eb46ef7c01760fc9495342bcc($context, $indent, $value);
        $value = $context->find('mail');
        $buffer .= $this->section50692d419fcb837e2154d3f3f12a709e($context, $indent, $value);
        $buffer .= $indent . '                    </ul>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="socialnetworks">
';
        $buffer .= $indent . '                    <h3 class="footer-title">';
        $value = $context->find('str');
        $buffer .= $this->section195e71f8828641c845dfa5605fcf44a6($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <ul class="mb-0">
';
        $value = $context->find('facebook');
        $buffer .= $this->section663c63fcc3500e27ff2c3224b83a70c6($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('twitter');
        $buffer .= $this->sectionE410e5d7195611469b008cbf6cae46e3($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('linkedin');
        $buffer .= $this->section72270ace27372cfb0f50b20c0675474f($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('youtube');
        $buffer .= $this->sectionEc71c2898ab8189c1101190ce5f46157($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('instagram');
        $buffer .= $this->sectionB483caa24f1201afdee1d8a6a862046d($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('whatsapp');
        $buffer .= $this->section2cc0ff3c0788fab44cdfd30f409c7007($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('telegram');
        $buffer .= $this->section4e129be1988cb307e2a216e936a92135($context, $indent, $value);
        $buffer .= $indent . '                    </ul>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="col-md-4 column-center">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.login_info'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="col-md-4 column-right">
';
        $value = $context->find('enablemobilewebservice');
        $buffer .= $this->section5f8f0af0e51bf07eca29102237514e35($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="footer-content-debugging footer-dark bg-dark text-light">
';
        $buffer .= $indent . '        <div class="moove-container-fluid footer-dark-inner">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.debug_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div data-region="footer-container-popover">
';
        $buffer .= $indent . '       
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '</footer>
';
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section1bee55b7fefa055bfd3ee2787131801d($context, $indent, $value);

        return $buffer;
    }

    private function sectionC383ddc1425fec8af2979220a8f6608a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'contactus, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'contactus, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section49cb9ffc6a19cf5452cafda6a14037b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li>
                                <a href="{{{website}}}" target="_blank" class="website btn btn-link">
                                    <i class="fa fa-globe"></i>
                                </a>
                            </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li>
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('website'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank" class="website btn btn-link">
';
                $buffer .= $indent . '                                    <i class="fa fa-globe"></i>
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD2dcf55eb46ef7c01760fc9495342bcc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li>
                                <a href="tel:{{{mobile}}}" target="_blank" class="mobile btn btn-link">
                                    <i class="fa fa-phone"></i>
                                </a>
                            </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li>
';
                $buffer .= $indent . '                                <a href="tel:';
                $value = $this->resolveValue($context->find('mobile'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank" class="mobile btn btn-link">
';
                $buffer .= $indent . '                                    <i class="fa fa-phone"></i>
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section50692d419fcb837e2154d3f3f12a709e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li>
                                <a href="mailto:{{{mail}}}" target="_blank" class="mail btn btn-link">
                                    <i class="fa fa-envelope"></i>
                                </a>
                            </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li>
';
                $buffer .= $indent . '                                <a href="mailto:';
                $value = $this->resolveValue($context->find('mail'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank" class="mail btn btn-link">
';
                $buffer .= $indent . '                                    <i class="fa fa-envelope"></i>
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section195e71f8828641c845dfa5605fcf44a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'followus, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'followus, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section663c63fcc3500e27ff2c3224b83a70c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li>
                                <a href="{{{facebook}}}" target="_blank" class="facebook btn btn-link btn-rounded">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li>
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('facebook'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank" class="facebook btn btn-link btn-rounded">
';
                $buffer .= $indent . '                                    <i class="fa fa-facebook"></i>
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE410e5d7195611469b008cbf6cae46e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li>
                                <a href="{{{twitter}}}" target="_blank" class="twitter btn btn-link btn-rounded">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li>
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('twitter'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank" class="twitter btn btn-link btn-rounded">
';
                $buffer .= $indent . '                                    <i class="fa fa-twitter"></i>
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section72270ace27372cfb0f50b20c0675474f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li>
                                <a href="{{{linkedin}}}" target="_blank" class="linkedin btn btn-link btn-rounded">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li>
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('linkedin'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank" class="linkedin btn btn-link btn-rounded">
';
                $buffer .= $indent . '                                    <i class="fa fa-linkedin"></i>
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc71c2898ab8189c1101190ce5f46157(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li>
                                <a href="{{{youtube}}}" target="_blank" class="youtube btn btn-link btn-rounded">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li>
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('youtube'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank" class="youtube btn btn-link btn-rounded">
';
                $buffer .= $indent . '                                    <i class="fa fa-youtube"></i>
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB483caa24f1201afdee1d8a6a862046d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li>
                                <a href="{{{instagram}}}" target="_blank" class="instagram btn btn-link btn-rounded">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li>
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('instagram'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank" class="instagram btn btn-link btn-rounded">
';
                $buffer .= $indent . '                                    <i class="fa fa-instagram"></i>
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2cc0ff3c0788fab44cdfd30f409c7007(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li>
                                <a href="https://api.whatsapp.com/send?phone={{{whatsapp}}}" target="_blank" class="whatsapp btn btn-link btn-rounded">
                                    <i class="fa fa-whatsapp"></i>
                                </a>
                            </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li>
';
                $buffer .= $indent . '                                <a href="https://api.whatsapp.com/send?phone=';
                $value = $this->resolveValue($context->find('whatsapp'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank" class="whatsapp btn btn-link btn-rounded">
';
                $buffer .= $indent . '                                    <i class="fa fa-whatsapp"></i>
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e129be1988cb307e2a216e936a92135(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li>
                                <a href="{{{telegram}}}" target="_blank" class="telegram btn btn-link btn-rounded">
                                    <i class="fa fa-telegram"></i>
                                </a>
                            </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li>
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('telegram'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank" class="telegram btn btn-link btn-rounded">
';
                $buffer .= $indent . '                                    <i class="fa fa-telegram"></i>
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD652fa6441125a6e092e0ca367dbfa54(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'getmoodleonyourmobile, tool_mobile';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'getmoodleonyourmobile, tool_mobile';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB04f280d8bee62d7a85e499b696e6e0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a href="{{{mobilesetuplink}}}">{{#str}}getmoodleonyourmobile, tool_mobile{{/str}}</a>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('mobilesetuplink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionD652fa6441125a6e092e0ca367dbfa54($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a730e04cd9615aea302448b4b637c1a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a href="https://play.google.com/store/apps/details?id={{androidappid}}">
                                <img src="{{config.wwwroot}}/theme/moove/pix/store_google.svg" alt="Play Store">
                            </a>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <a href="https://play.google.com/store/apps/details?id=';
                $value = $this->resolveValue($context->find('androidappid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                <img src="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/theme/moove/pix/store_google.svg" alt="Play Store">
';
                $buffer .= $indent . '                            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e204a6c38270102de00bc0a35276e03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a class="mt-1" href="https://apps.apple.com/app/id{{iosappid}}">
                                <img src="{{config.wwwroot}}/theme/moove/pix/store_apple.svg" alt="App Store">
                            </a>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <a class="mt-1" href="https://apps.apple.com/app/id';
                $value = $this->resolveValue($context->find('iosappid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                <img src="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/theme/moove/pix/store_apple.svg" alt="App Store">
';
                $buffer .= $indent . '                            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f8f0af0e51bf07eca29102237514e35(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#mobilesetuplink}}
                        <a href="{{{mobilesetuplink}}}">{{#str}}getmoodleonyourmobile, tool_mobile{{/str}}</a>
                    {{/mobilesetuplink}}
                    {{^mobilesetuplink}}
                        <h3 class="footer-title">{{#str}}getmoodleonyourmobile, tool_mobile{{/str}}</h3>
                    {{/mobilesetuplink}}
                    <div class="stores">
                        {{#androidappid}}
                            <a href="https://play.google.com/store/apps/details?id={{androidappid}}">
                                <img src="{{config.wwwroot}}/theme/moove/pix/store_google.svg" alt="Play Store">
                            </a>
                        {{/androidappid}}
                        {{#iosappid}}
                            <a class="mt-1" href="https://apps.apple.com/app/id{{iosappid}}">
                                <img src="{{config.wwwroot}}/theme/moove/pix/store_apple.svg" alt="App Store">
                            </a>
                        {{/iosappid}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('mobilesetuplink');
                $buffer .= $this->sectionB04f280d8bee62d7a85e499b696e6e0d($context, $indent, $value);
                $value = $context->find('mobilesetuplink');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <h3 class="footer-title">';
                    $value = $context->find('str');
                    $buffer .= $this->sectionD652fa6441125a6e092e0ca367dbfa54($context, $indent, $value);
                    $buffer .= '</h3>
';
                }
                $buffer .= $indent . '                    <div class="stores">
';
                $value = $context->find('androidappid');
                $buffer .= $this->section1a730e04cd9615aea302448b4b637c1a($context, $indent, $value);
                $value = $context->find('iosappid');
                $buffer .= $this->section9e204a6c38270102de00bc0a35276e03($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1bee55b7fefa055bfd3ee2787131801d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'theme_boost/footer-popover\'], function(FooterPopover) {
        FooterPopover.init();
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'theme_boost/footer-popover\'], function(FooterPopover) {
';
                $buffer .= $indent . '        FooterPopover.init();
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
