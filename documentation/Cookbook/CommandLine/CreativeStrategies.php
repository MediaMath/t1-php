<?php

require_once(__DIR__ . '/../../../vendor/autoload.php');

use MediaMath\TerminalOneAPI\Auth\UserPasswordAuth;
use MediaMath\TerminalOneAPI\Transport\GuzzleTransporter;
use MediaMath\TerminalOneAPI\Management;
use MediaMath\TerminalOneAPI\ApiClient;
use MediaMath\TerminalOneAPI\Decoder\JSONResponseDecoder;

/**
 * Example of finding out about a particular creative and which strategies it is running on
 */

$strategies = new CreativeStrategies($username, $password, $api_key);
$strategies->fetchInfoForAtomicCreativeOnExchange($creative_id, $exchange_id);

class CreativeStrategies
{

    private $api_client, $concepts, $exchanges;

    public function __construct($username, $password, $api_key)
    {

        $transport = new GuzzleTransporter(new UserPasswordAuth($username, $password, $api_key));

        $this->api_client = new ApiClient($transport, new JSONResponseDecoder());

    }

    public function fetchInfoForAtomicCreativeOnExchange($atomic_creative_id, $exchange_id)
    {
        print_r($this->fetchCreativeInfo($atomic_creative_id));

        if ($this->conceptsHasErrors()) {
            echo $this->conceptsHasErrors();
            die;
        }


        foreach ($this->getStrategies($atomic_creative_id) AS $strategy) {

            echo "Strategy ID: " . $strategy->id . "\n";
            echo "Strategy Name: " . $strategy->name . "\n";

            if ($strategy->run_on_all_exchanges == true) {

                echo "This strategy is set to run on all exchanges. Converting...\n";

                echo "New supply targeting: \n";
                print_r($this->getSupplyTargeting($exchange_id));
                continue;

            }

            echo $this->getStrategySupplies($strategy->id, $exchange_id) . "\n";

        }


    }

    private function fetchCreativeInfo($atomic_creative_id)
    {

        $atomic_creative = $this->api_client->read(
            new Management\AtomicCreative([
                'id' => $atomic_creative_id,
                'with' => 'concept,advertiser,agency,organization',

            ])
        );

        $strategy_ids = [];
        foreach ($this->getStrategies($atomic_creative_id) AS $strategy) {
            $strategy_ids[] = $strategy->id;
        }

        return [
            "Creative ID" => $atomic_creative_id,
            "Creative Name" => $atomic_creative->data->name,
            "Concept ID" => $atomic_creative->data->concept_id,
            "Concept Name" => $atomic_creative->data->concept->name,
            "Advertiser ID" => $atomic_creative->data->concept->advertiser_id,
            "Advertiser Name" => $atomic_creative->data->concept->advertiser->name,
            "Agency ID" => $atomic_creative->data->concept->advertiser->agency_id,
            "Agency Name" => $atomic_creative->data->concept->advertiser->agency->name,
            "Organization ID" => $atomic_creative->data->concept->advertiser->agency->organization_id,
            "Organization Name" => $atomic_creative->data->concept->advertiser->agency->organization->name,
            "Organization Contact" => $atomic_creative->data->concept->advertiser->agency->organization->contact_name,
            "Strategy IDs using this creative" => implode(',', $strategy_ids)
        ];


    }

    private function fetchConcepts($atomic_creative_id)
    {

        if (!is_null($this->concepts)) {
            return $this->concepts;
        }

        $this->concepts = $this->api_client->read(
            new Management\Concept([
                'with' => 'strategies',
                'q' => 'atomic_creatives.id==' . $atomic_creative_id,
                'full' => '*'
            ])
        );

        return $this->concepts;

    }

    private function conceptsHasErrors()
    {
        if (isset($this->concepts->errors)) {
            return print_r($this->concepts->errors, true);
        }

        if (count($this->concepts->data[0]->strategies) == 0) {
            return ("No strategies to run");
        }
    }

    private function getStrategies($atomic_creative_id)
    {

        $concepts = $this->fetchConcepts($atomic_creative_id);

        return $concepts->data[0]->strategies;
    }

    private function getSupplyTargeting($exchange_id)
    {
        $count = 1;
        $supply_targeting = array();
        foreach ($this->fetchExchanges() as $supply_source) {
            if ($supply_source->id != $exchange_id) {

                if ($supply_source->has_display == 1) {
                    $supply_targeting["supply_source." . $count . ".id"] = $supply_source->id;
                    $count++;
                }
            }
        }
        return $supply_targeting;
    }

    private function fetchExchanges()
    {

        if (!is_null($this->exchanges)) {
            return $this->exchanges;
        }

        $exchanges = $this->api_client->read(
            new Management\SupplySource([
                'sort_by' => 'id',
                'q' => 'status==1',
                'full' => '*'
            ])
        );

        $this->exchanges = $exchanges->data;

        return $this->exchanges;

    }

    private function getStrategySupplies($strategy_id, $exchange_id)
    {

        $strategy_supplies = $this->api_client->read(new Management\StrategySupply([
            'strategy_id' => $strategy_id
        ]));

        $error = "";
        if (isset($strategy_supplies->data->deals)) {
            $error = "this strategy uses PMP-E";
        }
        if (!isset($strategy_supplies->data->supply_sources)) {
            return "No supply sources " . $error . ".";
        }


        $status = "Checking Exchange Selection:\n";

        $count = 1;
        $supply_targeting = array();

        $conflict = false;

        foreach ($strategy_supplies->data->supply_sources as $supply_source) {
            if ($supply_source->id == $exchange_id) {
                $conflict = true;
                $supply_name = $supply_source->name;
            } else {
                $supply_targeting["supply_source." . $count . ".id"] = $supply_source->id;
                $count++;
            }

        }

        if ($conflict == false) {
            $status .= "The exchange (ID $exchange_id) is not targeted" . "\n";
            $status .= "Exchange Targeting will remain as: \n";
            $status .= print_r($supply_targeting, true);
            return $status;
        }

        $status .= "The exchange ($supply_name) is targeted" . "\n";
        $status .= "New supply targeting: \n";
        $status .= print_r($supply_targeting, true);

        return $status;

    }

}

