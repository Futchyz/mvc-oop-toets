<?php

class landingpages extends Controller
{
    
    private $richmodel;
  
    public function __construct() 
    {
        $this->richModel = $this->model('RichestPeople');
    }

    public function index()
    {
        $records = $this->richModel->getRichestPeople();
    

        $rows = '';

        foreach ($records as $items)
        {
            $rows .= "<tr>
                        <td>$items->Id</td>
                        <td>$items->MyName</td>
                        <td>$items->Networth</td>
                        <td>$items->Age</td>
                        <td>$items->Company</td>
                      </tr>";
        }

        $data = [
            'title' => "homepagina",
            'rows' => $rows
        ];
        $this->view('richestpeople/index', $data);
    }
}