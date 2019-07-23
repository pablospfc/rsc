<?php
/**
 * Created by PhpStorm.
 * User: claudio.santos
 * Date: 10/07/2019
 * Time: 08:36
 */

namespace RSC\model;


use MocaBonita\tools\eloquent\MbModel;

class DocumentoCliente extends MbModel
{
    protected $table = "rsc_documentos_cliente";
    public $timestamps = false;

    protected $fillable= [
        'id_contrato',
        'id_tipo_documento',
        'caminho',
    ];

    public function getDocumentos($idContrato){
        $dados = self::select(
            "tip.nome as tipo_documento",
            "cli.nome as cliente",
            "doc.caminho as caminho",
            "doc.nome_arquivo as nome_arquivo",
            "doc.id_contrato as id_contrato"
        )
            ->from("rsc_documentos_cliente as doc")
            ->join("rsc_tipo_documento as tip","doc.id_tipo_documento","=","tip.id")
            ->join("rsc_contrato as con","doc.id_contrato","con.id")
            ->join("rsc_cliente as cli","con.id_cliente","=","cli.id")
            ->where("doc.id_contrato", "=", $idContrato)
            ->get()
            ->toArray();

        if (!is_array($dados) || empty($dados))
            throw new \Exception('Não foi possível listar documentos!');

        return $dados;
    }

    public function salvar($dados,$file){
        try {
            $path = (new Arquivo())->saveFileInDisk($file);
            $documento = self::updateOrCreate(
                [
                    'id_contrato' => $dados['id_contrato'],
                    'id_tipo_documento' => $dados['id_tipo_documento']
                ], [
                'id_contrato' => $dados['id_contrato'],
                'id_tipo_documento' => $dados['id_tipo_documento'],
                'caminho' => $path,
            ]);

            return ['message' => 'O arquivo foi enviado com sucesso'];

        }catch(\Exception $e){
            Log::createFromException($e);
            throw new \Exception("Ocorreu um erro ao fazer o upload do arquivo");
        }
    }

}