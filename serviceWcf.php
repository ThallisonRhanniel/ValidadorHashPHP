<?php
class ServiceWcf
{
    public $result = null;
    public $offlineTest = false;
    function GetDados($idhash, $hash )
    {
        try
        {
            $wsdl = 'http://localhost:55363/ProdutoService.svc?wsdl';
            $soapClient = new SoapClient($wsdl, array('cache_wsdl' => 0));
            $parameters = new \stdClass(); // Remove Aviso solicitando a inicialização da variável
            $parameters->idHash = $idhash;
            $parameters->hash = $hash;

            $this->result = $soapClient->GetPessoa($parameters); //Vou buscar os dados no metodo do Wfc

            $this->offlineTest = true;
            $this->FormatJson();
        }
        catch (SoapFault $error)
        {
            $this->CriarLog($error->faultcode, $error->faultstring );
            $this->offlineTest = false;
            $this->FormatJson();
        }
        $soapClient = null;
    }

    function FormatJson()
    {

        if ($this->result != null AND $this->result->GetPessoaResult != NULL)
        {
            $id = $this->result->GetPessoaResult->pessoas->idHash;
            $valorHash = $this->result->GetPessoaResult->pessoas->valorHash;
            $nome = $this->result->GetPessoaResult->pessoas->nome;
        }
        else
        {
            $id = '';
            $valorHash = '';
            $nome = '';
        }
        $array = array('id' => utf8_encode($id), 'hash' => $valorHash , 'nome' => $nome);
        $json_string = json_encode($array, JSON_PRETTY_PRINT);
        echo $json_string;
    }


    function CriarLog($erroCode,$error){
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('H:i');
        $dataHoje = date("Y_m_d");

        //Cria o arquivo
        $arquivo = fopen("log/log_service.$dataHoje.log", "ab");

        //Escreve os dados
        fwrite($arquivo, " [$date]Codigo Erro:$erroCode \r\n [$date]Error: $error \r\n"); //

        // Fecha o arquivo
        fclose($arquivo);
    }


}