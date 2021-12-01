<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConnectorModel;
use Illuminate\Support\Facades\Input;

class ConnectorController extends Controller
{
    public function __construct()
    {
        $this->ConnectorModel = new ConnectorModel();
    }

    public function index()
    {
        $data = [
            'connector' => $this->ConnectorModel->firstData(),
        ];

        $quest_id = $data['connector']->ID_Pertanyaan;

        $data1 = [
            'question' => $this->ConnectorModel->question($quest_id),
        ];
        //$question = $this->ConnectorModel->question($quest_id);

        $data['connector']->pertanyaan = $data1['question'][0]->Pertanyaan;
        $data['connector']->seq = 1;

        //dd($data);

        return view('v_connector')->with($data);
    }

    public function next($seq, $id, Request $request)
    {
        //dd($request->submit);
        if($request->submit == 'Ya') {
            $desc = $this->ConnectorModel->getIDYes($id);
            //dd(strlen($desc));
            if(strlen($desc) < 4){
                $data = [
                    'connector' => $this->ConnectorModel->getData($desc),
                ];
                $quest_id = $data['connector']->ID_Pertanyaan;

                $data1 = [
                    'question' => $this->ConnectorModel->question($quest_id),
                ];

                $data['connector']->pertanyaan = $data1['question'][0]->Pertanyaan;
                $data['connector']->seq = $seq+1;

                return view('v_connector')->with($data);

            }else{
                //dd('Stop');
                $data = [
                    'connector' => $this->ConnectorModel->getResult($desc),
                ];

                $data['connector']->seq = $seq+1;

                //dd($data);

                return view('v_result')->with($data);
            }
        }else if($request->submit == 'Tidak'){
            $desc = $this->ConnectorModel->getIDNo($id);
            //dd(strlen($desc));
            if(strlen($desc) < 4){
                $data = [
                    'connector' => $this->ConnectorModel->getData($desc),
                ];
                $quest_id = $data['connector']->ID_Pertanyaan;

                $data1 = [
                    'question' => $this->ConnectorModel->question($quest_id),
                ];

                $data['connector']->pertanyaan = $data1['question'][0]->Pertanyaan;
                $data['connector']->seq = $seq+1;

                return view('v_connector')->with($data);

            }else{
                //dd('Stop');
                $data = [
                    'connector' => $this->ConnectorModel->getResult($desc),
                ];

                $data['connector']->seq = $seq+1;

                return view('v_result')->with($data);
            }
        }
    }
}
