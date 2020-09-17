<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SoapClient;

class CasinoController extends Controller
{
    // GET GAMES LIST
    function wsGetListGames () {

        $client = new SoapClient('http://api-dom.ns3177.com/GBSGameService.asmx?wsdl',
            array(
                'soap_version' =>  SOAP_1_2,
                'compression'  =>  SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
                'encoding'     => 'ISO-8859-1',
                'login'        => "PROD_159876523",
                'password'     => "PSWD_159876523"
            )
        );
        try {
            // setting params
            $params = new \stdClass();
            $params -> hall = "65291";
            $params -> Skin_Name = 'salayes';
            //Method Get Games List
            $game_list_ = (array)$client->wsGetListGames($params);
            $gamelist_stdClass = (array)$game_list_['wsGetListGamesResult'];
            $List_Gaming = (array)$gamelist_stdClass['API_GameInfo'];
        }
        catch (Exception $e){

            $List_Gaming = $e->getMessage();
        }

        return ($List_Gaming);
    }

    // EXECUTE GAME
    //*****************************************************************
    function wsExecuteGame () {
        $client = new SoapClient('http://api-dom.ns3177.com/GBSGameService.asmx?wsdl',
            array(
                'soap_version' =>  SOAP_1_2,
                'compression'  =>  SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
                'encoding'     => 'ISO-8859-1',
                'login'        => "PROD_159876523",
                'password'     => "PSWD_159876523"
            )
        );
        $name = $_GET['Name'];
        $brand = $_GET['Brand'];
        $mobile = $_GET['Mobile'];
        try {
            // setting params
            $params = new \stdClass();
            $params -> Skin_Id_Master = '65291';
            $params -> Skin_Name = 'salayes';
            $params -> Skin_User_Login = 'utenteyes';
            $params -> Game_Name = $name;
            $params -> Brand = $brand;
            $params -> Language = 'IT';
            $params -> Currency = 'EUR';
            $params -> Mobile = $mobile;
            $params -> ForFun = '0';
            $params -> Token = '1185';
            $params -> lobbyURL = "xxxxxxxxxxxx.com";

            $game_url_path_ = (array)$client->wsExecuteGame($params);
            $game_url_path = (array)$game_url_path_['wsExecuteGameResult'];
        }
        catch (Exception $e){

            $game_url_path = $e->getMessage();
        }

        return ((array)$game_url_path);
    }

}
