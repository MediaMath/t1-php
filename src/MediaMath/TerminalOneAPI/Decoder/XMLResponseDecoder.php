<?php

namespace MediaMath\TerminalOneAPI\Decoder;

use MediaMath\TerminalOneAPI\Infrastructure\XMLDecodable;

class XMLResponseDecoder implements XMLDecodable
{

    public function decode($api_response)
    {

        $dom = new \DOMDocument();
        $dom->loadXML($api_response);
        $this->fetchObjectFromXml($dom);
        $sxml = simplexml_load_string($dom->saveXML());

        return $sxml;
    }

    function fetchObjectFromXml($domNode)
    {
        foreach ($domNode->childNodes as $node) {
            if ($node->hasChildNodes()) {
                $this->fetchObjectFromXml($node);
            } else {
                if ($domNode->hasAttributes() && strlen($domNode->nodeValue)) {
                    $domNode->setAttribute("nodeValue", $node->textContent);
                    $node->nodeValue = "";
                }
            }
        }
    }

}