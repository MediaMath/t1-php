<?php

namespace MediaMath\TerminalOneAPI\Decoder;

use MediaMath\TerminalOneAPI\Infrastructure\Decodable;
use MediaMath\TerminalOneAPI\Infrastructure\ApiResponse;
use MediaMath\TerminalOneAPI\Infrastructure\ApiResponseMeta;

class XMLResponseDecoder implements Decodable
{

    public function decode($api_response)
    {

        $dom = new \DOMDocument();
        $dom->loadXML($api_response);
        $this->fetchObjectFromXml($dom);
        $sxml = simplexml_load_string($dom->saveXML());

        $attrs = (array) $sxml->attributes();
        $entities = (array) $sxml->entities;

        $meta = new ApiResponseMeta([
            'called_on' => $attrs['@attributes']['called_on'],
            'total_count' => $entities['@attributes']['count']
        ]);

        return new ApiResponse($meta, $sxml->entities);

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