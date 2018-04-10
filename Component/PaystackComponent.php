<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Http\Client;

/**
 * Paystack component
 */
class PaystackComponent extends Component
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    private $http;

    public function __construct()
    {
      //parent::__construct($collection, $settings);
      $this->http = new Client([
      "headers" => ["authorization" => "Bearer sk_test_a5f08ca803dfffd53a521bfda552684c2a795539"]
    ]);
    }

    /**
      * verify transaction method
      * @param string|null $reference transaction reference to verify
      * @return \Cake\Http\Response|void
      */
    public function verifytransaction($reference = null){
      $response = $this->http->get('https://api.paystack.co/transaction/verify/'.$reference,[
        'type' => 'json'
      ]);

    return json_decode($response->body, true);
    }

    /** create plan method
    *   @param array $data array containing plan detail; plan name, amount in kobo and interval
    *   @return \Cake\Http\Response|void
    */
    public function createplan($data = null){
      $response = $this->http->post('https://api.paystack.co/plan',
      json_encode($data),[
        'type' => 'json'
      ]);
      return json_decode($response->body, true);
    }

    /**
      * editplan method
      * @param string|null $plancode to update
      * @var array $data array to update e.g plan name or amount or both
      * @return \Cake\Http\Response|void
      */
    public function editplan($plancode = null, $data){
      $response = $this->http->post('https://api.paystack.co/plan'.$Plancode,
      json_encode($data),[
        'type' => 'json'
      ]);
      return json_decode($response->body, true);
    }

}
