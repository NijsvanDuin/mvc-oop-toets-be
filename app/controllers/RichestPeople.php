<?php

class RichestPeople extends Controller
{
    // Properties, field
    private $richestPeopleModel;

    // Dit is de constructor
    public function __construct()
    {
        $this->richestPeopleModel = $this->model('RichestPeople');
    }

    public function index()
    {
        /**
         * Haal via de method getFruits() uit de model Fruit de records op
         * uit de database
         */
        $richestPeople = $this->richestPeopleModel->getRichestPeople();

        /**
         * Maak de inhoud voor de tbody in de view
         */
        $rows = '';
        foreach ($richestPeople as $value) {
            $rows .= "<tr>
                    <td>$value->id</td>
                    <td>$value->name</td>
                    <td>$value->netWorth</td>
                    <td>$value->age</td>
                    <td>$value->country</td>
                    <td><a href='" . URLROOT . "/richestpeople/delete/$value->id'>delete</a></td>
                    </tr>";
        }
        $data = [
            'title' => '<h1>Rijkste mensen overzicht</h1>',
            'richestPeople' => $rows
        ];
        $this->view('richestpeople/index', $data);
    }
    public function delete($id)
    {
        $this->richestPeopleModel->deleteRichestPeople($id);
        $data = [
            'deleteStatus' => 'De rij is verwijderd'
        ];
        $this->view('richestpeople/delete', $data);
        header("Refresh:3; url=" . URLROOT . "/richestpeople/index");
    }
}
