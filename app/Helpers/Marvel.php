<?php

use Illuminate\Support\Facades\Http;

class Marvel
{
    protected $publicKey = '80d42ac709235074738c1a7e8b624983';
    protected $privateKey = 'c3c017fa100a3a61dd85fac308847edb41dcde37';
    protected $marvel;
    protected $marvelAPI = 'http://gateway.marvel.com/v1/public/comics';

    public function getAllHeroes()
    {
        $hash = $this->_generateHash();
        $response = Http::get($this->marvelAPI, [
            'ts' => $hash['ts'],
            'apikey' => $this->publicKey,
            'hash' => $hash['hash']
        ]);

        $resposta_dados = json_decode($response, true);
        return ($resposta_dados['data']['results']);
    }

    private function _generateHash()
    {
        $date = new DateTime();
        $data['ts'] = $date->getTimestamp();
        $data['hash'] = md5($data['ts'].$this->privateKey.$this->publicKey);

        return $data;
    }
}
