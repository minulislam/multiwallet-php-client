<?php
// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: api.proto

namespace Pb;

final class APIServiceStub implements APIService
{
    use \Lv\Grpc\CurlStubTrait;

    public function Stop(\Pb\Empty $request) : \Pb\Empty
    {
        $reply = new \Pb\Empty();

        $this->send("/pb.API/Stop", $request, $reply);

        return $reply;
    }
    public function CurrentAddress(\Pb\KeySelection $request) : \Pb\Address
    {
        $reply = new \Pb\Address();

        $this->send("/pb.API/CurrentAddress", $request, $reply);

        return $reply;
    }
    public function NewAddress(\Pb\KeySelection $request) : \Pb\Address
    {
        $reply = new \Pb\Address();

        $this->send("/pb.API/NewAddress", $request, $reply);

        return $reply;
    }
    public function ChainTip(\Pb\CoinSelection $request) : \Pb\Height
    {
        $reply = new \Pb\Height();

        $this->send("/pb.API/ChainTip", $request, $reply);

        return $reply;
    }
    public function Balance(\Pb\CoinSelection $request) : \Pb\Balances
    {
        $reply = new \Pb\Balances();

        $this->send("/pb.API/Balance", $request, $reply);

        return $reply;
    }
    public function MasterPrivateKey(\Pb\CoinSelection $request) : \Pb\Key
    {
        $reply = new \Pb\Key();

        $this->send("/pb.API/MasterPrivateKey", $request, $reply);

        return $reply;
    }
    public function MasterPublicKey(\Pb\CoinSelection $request) : \Pb\Key
    {
        $reply = new \Pb\Key();

        $this->send("/pb.API/MasterPublicKey", $request, $reply);

        return $reply;
    }
    public function HasKey(\Pb\Address $request) : \Pb\BoolResponse
    {
        $reply = new \Pb\BoolResponse();

        $this->send("/pb.API/HasKey", $request, $reply);

        return $reply;
    }
    public function Params(\Pb\Empty $request) : \Pb\NetParams
    {
        $reply = new \Pb\NetParams();

        $this->send("/pb.API/Params", $request, $reply);

        return $reply;
    }
    public function Transactions(\Pb\CoinSelection $request) : \Pb\TransactionList
    {
        $reply = new \Pb\TransactionList();

        $this->send("/pb.API/Transactions", $request, $reply);

        return $reply;
    }
    public function GetTransaction(\Pb\Txid $request) : \Pb\Tx
    {
        $reply = new \Pb\Tx();

        $this->send("/pb.API/GetTransaction", $request, $reply);

        return $reply;
    }
    public function GetFeePerByte(\Pb\FeeLevelSelection $request) : \Pb\FeePerByte
    {
        $reply = new \Pb\FeePerByte();

        $this->send("/pb.API/GetFeePerByte", $request, $reply);

        return $reply;
    }
    public function Spend(\Pb\SpendInfo $request) : \Pb\Txid
    {
        $reply = new \Pb\Txid();

        $this->send("/pb.API/Spend", $request, $reply);

        return $reply;
    }
    public function BumpFee(\Pb\Txid $request) : \Pb\Txid
    {
        $reply = new \Pb\Txid();

        $this->send("/pb.API/BumpFee", $request, $reply);

        return $reply;
    }
    public function AddWatchedScript(\Pb\Address $request) : \Pb\Empty
    {
        $reply = new \Pb\Empty();

        $this->send("/pb.API/AddWatchedScript", $request, $reply);

        return $reply;
    }
    public function GetConfirmations(\Pb\Txid $request) : \Pb\Confirmations
    {
        $reply = new \Pb\Confirmations();

        $this->send("/pb.API/GetConfirmations", $request, $reply);

        return $reply;
    }
    public function SweepAddress(\Pb\SweepInfo $request) : \Pb\Txid
    {
        $reply = new \Pb\Txid();

        $this->send("/pb.API/SweepAddress", $request, $reply);

        return $reply;
    }
    public function CreateMultisigSignature(\Pb\CreateMultisigInfo $request) : \Pb\SignatureList
    {
        $reply = new \Pb\SignatureList();

        $this->send("/pb.API/CreateMultisigSignature", $request, $reply);

        return $reply;
    }
    public function Multisign(\Pb\MultisignInfo $request) : \Pb\RawTx
    {
        $reply = new \Pb\RawTx();

        $this->send("/pb.API/Multisign", $request, $reply);

        return $reply;
    }
    public function EstimateFee(\Pb\EstimateFeeData $request) : \Pb\Fee
    {
        $reply = new \Pb\Fee();

        $this->send("/pb.API/EstimateFee", $request, $reply);

        return $reply;
    }
    public function GetKey(\Pb\Address $request) : \Pb\Key
    {
        $reply = new \Pb\Key();

        $this->send("/pb.API/GetKey", $request, $reply);

        return $reply;
    }
    public function ListKeys(\Pb\CoinSelection $request) : \Pb\Keys
    {
        $reply = new \Pb\Keys();

        $this->send("/pb.API/ListKeys", $request, $reply);

        return $reply;
    }
    public function ListAddresses(\Pb\CoinSelection $request) : \Pb\Addresses
    {
        $reply = new \Pb\Addresses();

        $this->send("/pb.API/ListAddresses", $request, $reply);

        return $reply;
    }
    public function WalletNotify(\Pb\CoinSelection $request) : \Pb\Tx
    {
        $reply = new \Pb\Tx();

        $this->send("/pb.API/WalletNotify", $request, $reply);

        return $reply;
    }
    public function DumpTables(\Pb\CoinSelection $request) : \Pb\Row
    {
        $reply = new \Pb\Row();

        $this->send("/pb.API/DumpTables", $request, $reply);

        return $reply;
    }
}
