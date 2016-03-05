<?php

namespace Mediamath\TerminalOneAPI\Decoder;

use Mediamath\TerminalOneAPI\Infrastructure\Decodable;

class XMLResponseDecoder implements Decodable
{

    public function decode($api_response)
    {

        $dom = new \DOMDocument();
        $dom->loadXML($api_response);
        $this->json_prepare_xml($dom);
        $sxml = simplexml_load_string($dom->saveXML());
        $data = json_decode(json_encode($sxml));

        return $data;
    }

    function json_prepare_xml($domNode)
    {
        foreach ($domNode->childNodes as $node) {
            if ($node->hasChildNodes()) {
                $this->json_prepare_xml($node);
            } else {
                if ($domNode->hasAttributes() && strlen($domNode->nodeValue)) {
                    $domNode->setAttribute("nodeValue", $node->textContent);
                    $node->nodeValue = "";
                }
            }
        }
    }

}